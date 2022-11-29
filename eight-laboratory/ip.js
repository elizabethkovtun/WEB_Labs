let delayTimer;

$(document).ready(function () {
	getServerIP();

	$("#ip").on("input", function () {
		handleChange();
	});

	$("#ip").on("change", function () {
		handleChange();
	});

	function handleChange() {
		$("#message").hide();
		clearTimeout(delayTimer);
		delayTimer = setTimeout(function () {
			console.log("delayed");
			const ip = $("#ip").val();
			const ipRegex = /^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
			if (!ipRegex.test(ip)) {
				$("#result").html(`
          <p class=\"detail\">
            IP details for ${ip} <span id=\"message\" style=\"color: red;\">[Invalid IP Address]</span>
          </p>
          <h2 class=\"info\">Geolocation information</h2>
          <p>Country: N/A</p>
          <p>Flag: <img src=\"../flags/_unitednations.png\" alt=\"Flag of N/A\" /></p>
          <p>Region: N/A</p>
          <p>Region name: N/A</p>
          <p>City: N/A</p>
          <p>Latitude: N/A</p>
          <p>Longitude: N/A</p>
        `);
				return;
			}
			$.get(
				"request.php",
				{
					ip: ip,
				},
				function (data) {
					$("#result").html(data);
					$("#ip").css("border", "");
					$("#ip").css("background-color", "");
					$("#ip").css("color", "");
				}
			);
		}, 1000);
	}

	function getServerIP() {
		$.get("server-ip.php", function (data) {
			$("#ip").val(data);
			$("#ip").trigger("change");
		});
	}
});

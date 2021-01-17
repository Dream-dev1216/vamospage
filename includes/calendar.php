	<style>
		::placeholder {
			color: green;
		}

		input[type="date"]::-webkit-inner-spin-button {
			height: 28px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {

		});

		function convertMonthString(strMes) {

			switch (strMes) {
				case "January":
					mes = "01";
					break;
				case "February":
					mes = "02";
					break;
				case "March":
					mes = "03";
					break;
				case "April":
					mes = "04";
					break;
				case "May":
					mes = "05";
					break;
				case "June":
					mes = "06";
					break;
				case "July":
					mes = "07";
					break;
				case "August":
					mes = "08";
					break;
				case "September":
					mes = "09";
					break;
				case "October":
					mes = "10";
					break;
				case "November":
					mes = "11";
					break;
				case "December":
					mes = "12";
					break;
			}
			return mes;
		}

		function convertYearString(strYear) {
			year = "20" + strYear;
			return year;
		}

		function convertDayString(strDay) {
			day = strDay;
			if (strDay >= 1 && strDay <= 9) {
				day = "0" + strDay;
			}
			return day;
		}

		function GetFormatShort(longDateFormat) {

			parte1 = longDateFormat.split(",");

			mes_largo_dia = parte1[1].trim();
			mes_numero = mes_largo_dia.split(" ");
			_var_mm = mes_numero[0].trim();

			var _var_ret_mm = "01";

			_var_ret_mm = convertMonthString(_var_mm);

			_var_ret_dd = convertDayString(mes_numero[1].trim());
			_var_ret_yyyy = parte1[2].trim();

			valor_final = _var_ret_yyyy + "" + _var_ret_mm + "" + _var_ret_dd;

			return valor_final;
		}

		function reservationcall() {

			var pickuplocation = $("#location").val();
			var dropLocation = $("#dropLocation").val();

			var dateIni = $("#pickDate").val();
			var dateFin = $("#dropOffDate").val();
			var timeIni = $("#pickTime").val();
			var timeFin = $("#dropTime").val();

			if (pickuplocation == "-1") {
				alert("Please select your pick up location");
				return false;
			}
			if (dateIni == "") {
				alert("Please select your pick up date");
				return false;
			}
			if (timeIni == "Time") {
				alert("Please select your pick up time");
				return false;
			}
			if (dateFin == "") {
				alert("Please select your return date");
				return false;
			}
			if (timeFin == "Time") {
				alert("Please select your return time");
				return false;
			}

			var fecha_inicio_r = "2020-01-01";
			fecha_inicio_r = GetFormatShort(dateIni);

			var fecha_final_r = "2020-01-01";
			fecha_final_r = GetFormatShort(dateFin);

			var restimeIni = timeIni.replace(" ", "");
			var tmpvar = restimeIni.split(":");
			timeIni = tmpvar[0] + tmpvar[1];

			var restimeFin = timeFin.replace(" ", "");
			var tmpvar = restimeFin.split(":");
			timeFin = tmpvar[0] + tmpvar[1];

			var resdateIni = fecha_inicio_r.split("-");
			newDay = convertDayString(resdateIni[0]);
			newMes = convertMonthString(resdateIni[1]);
			newYear = convertYearString(resdateIni[2]);

			newDay = fecha_inicio_r.substring(6, 8);
			newMes = fecha_inicio_r.substring(4, 6);
			newYear = fecha_inicio_r.substring(0, 4);

			dateIni = newYear + newMes + newDay;
			var pickUpDate = new Date(newYear, newMes - 1, newDay);
			var resdateFin = fecha_final_r.split("-");

			newDay = fecha_final_r.substring(6, 8);
			newMes = fecha_final_r.substring(4, 6);
			newYear = fecha_final_r.substring(0, 4);

			dateFin = newYear + newMes + newDay;
			var returnDate = new Date(newYear, newMes - 1, newDay);
			var diffDays = parseInt((returnDate - pickUpDate) / (1000 * 60 * 60 * 24));

			if (diffDays < 3) {
				alert("Please select a minimum 3 day rental");
				return false;
			}

			/* INI - Minimo de Renta por 7 Dias Durante Fechas Especificas - Req By Alex-Villalobos */

			dateMinRenta = new Date(2018, 12 - 1, 15);
			dateMaxRenta = new Date(2019, 2 - 1, 1);

			if (pickUpDate >= dateMinRenta && pickUpDate <= dateMaxRenta) {
				diffDays = parseInt((returnDate - pickUpDate) / (1000 * 60 * 60 * 24));
				if (diffDays < 7) {
					alert("Please select a minimum 7 day rental");
					return false;
				}
			}

			/* FIN - Minimo de Renta por 7 Dias Durante Fechas Especificas - Req By Alex-Villalobos */

			agent_call = $("#agent_call").val();

			pickuplocation_v = 1;
			substring_truco = pickuplocation.substring(0, 2);
			if (substring_truco == "Li") {
				pickuplocation_v = 2;
			}

			dropLocation_v = 1;
			substring_truco = dropLocation.substring(0, 2);
			if (substring_truco == "Li") {
				dropLocation_v = 2;
			}

			url = "http://reservations.vamosrentacar.com/Search/StepSearch/VAMOS|EN|";
			url = url + fecha_inicio_r + "|" + pickuplocation_v + "|" + timeIni + "|";
			url = url + fecha_final_r + "|" + dropLocation_v + "|" + timeFin + "|VamosSite|H";

			agent_call = "-1";
			if (agent_call != "-1") {
				SiteAgentCode = "SiteAgentCode:" + agent_call;
				url = url + "|" + SiteAgentCode;
			}

			window.open(url, "VAMOSRENTACARBOOKING");
			return true;
		}
	</script>

	<form class="calendar">
		<div class="form-row">
			<div class="col-lg-10">
				<div class="form-row d-flex align-items-center">
					<div id="pickLocation" class="form-group col-12 col-lg-6">
						<input list="languages" placeholder="Search Location" class="form-control" id="location">
						<datalist id="languages">
							<option value="Dutch">
							<option value="English">
							<option value="Pakistan">
							<option value="Malaysia">
							<option value="India">
							<option value="Bangladesh">
							<option value="German">
							<option value="Chinese">
							<option value="Swedish">
						</datalist>
					</div>
					<div id="pickDateContent" class="form-group col-6 col-lg-4">
						<label for="pickDate" class="w-100 m-0">
							<div class="input-group">
								<input type="date" class="form-control calendar">
							</div>
						</label>
					</div>
					<div id="timePick" class="form-group col-6 col-lg-2">
						<select class="form-control " id="pickTime">
							<option>06:00 AM</option>
							<option>06:30 AM</option>
							<option>07:30 AM</option>
							<option>08:00 AM</option>
							<option>08:30 AM</option>
							<option>09:00 AM</option>
							<option>09:30 AM</option>
							<option>10:00 AM</option>
							<option>10:30 AM</option>
							<option>11:00 AM</option>
							<option>11:30 AM</option>
							<option>12:00 PM</option>
							<option>12:30 PM</option>
							<option>13:00 PM</option>
							<option>13:30 PM</option>
							<option>14:00 PM</option>
							<option>14:30 PM</option>
							<option>15:00 PM</option>
							<option>15:30 PM</option>
							<option>16:00 PM</option>
							<option>16:30 PM</option>
							<option>17:00 PM</option>
							<option>17:30 PM</option>
							<option>18:00 PM</option>
							<option>18:30 PM</option>
							<option>19:00 PM</option>
							<option>19:30 PM</option>
							<option>20:00 PM</option>
							<option>20:30 PM</option>
							<option>21:00 PM</option>
							<option>21:30 PM</option>
							<option>22:00 PM</option>
						</select>
					</div>
				</div>
				<div id="dropOffContent" class="form-row mt-2">
					<div class="form-group col-12 col-lg-6">
						<input type="text" class="form-control" id="dropLocation" name="dropLocation" placeholder="Choose Return Location">
						<i class="far fa-times-circle closeIconDrop"></i>
					</div>
					<div class="form-group col-6 col-lg-4" id="hide">
						<label for="dropOffDate" class="w-100 m-0">
							<div class="input-group">
								<input type="text" class="form-control calendar" id="dropOffDate" name="dropOffDate" maxlength="10" placeholder="Drop-off Date" readonly>
								<div class="input-group-append">
									<div class="input-group-text"><i class="icon-append fa fa-calendar-alt"></i></div>
								</div>
							</div>
						</label>
					</div>
					<div class="form-group col-6 col-lg-2">
						<select class="form-control" id="dropTime">
							<option>06:00 AM</option>
							<option>06:30 AM</option>
							<option>07:30 AM</option>
							<option>08:00 AM</option>
							<option>08:30 AM</option>
							<option>09:00 AM</option>
							<option>09:30 AM</option>
							<option>10:00 AM</option>
							<option>10:30 AM</option>
							<option>11:00 AM</option>
							<option>11:30 AM</option>
							<option>12:00 PM</option>
							<option>12:30 PM</option>
							<option>13:00 PM</option>
							<option>13:30 PM</option>
							<option>14:00 PM</option>
							<option>14:30 PM</option>
							<option>15:00 PM</option>
							<option>15:30 PM</option>
							<option>16:00 PM</option>
							<option>16:30 PM</option>
							<option>17:00 PM</option>
							<option>17:30 PM</option>
							<option>18:00 PM</option>
							<option>18:30 PM</option>
							<option>19:00 PM</option>
							<option>19:30 PM</option>
							<option>20:00 PM</option>
							<option>20:30 PM</option>
							<option>21:00 PM</option>
							<option>21:30 PM</option>
							<option>22:00 PM</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-2 d-flex align-items-center justify-content-center">
				<button type="button" class="btn btn-primary w-100" style=" padding-right:25px; padding-left:25px; font-size: 14px;" onclick="reservationcall();">Search Again</button>
			</div>
		</div>
	</form>
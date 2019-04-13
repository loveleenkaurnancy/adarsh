$(document).ready(function()
{
	$("#submit").click(function()
	{
		var name = $("#name").val();
		var age = $("#age").val();
		var sex = $("#sex").val();
		var address = $("#address").val();
		var datee = $("#datee").val();

		var history = $("#history").val();
		var diagnosis = $("#diagnosis").val();
		var advice = $("#advice").val();

		var re_vision = $("#re_vision").val();
		var le_vision = $("#le_vision").val();
		var re_tension = $("#re_tension").val();
		var le_tension = $("#le_tension").val();
		var re_sac = $("#re_sac").val();
		var le_sac = $("#le_sac").val();
		var re_fundus = $("#re_fundus").val();
		var le_fundus = $("#le_fundus").val();

		// var glasses = $("#glasses").val();
		var checkBoxGlass = document.getElementById("glasses");
		if (checkBoxGlass.checked == true)
		{
			var glasses = "glasses";
		} 
		else
		{
			var glasses = "";
		}

		var re_d_s = $("#re_d_s").val();
		var re_d_c = $("#re_d_c").val();
		var re_d_a = $("#re_d_a").val();
		var re_n_s = $("#re_n_s").val();
		var re_n_c = $("#re_n_c").val();
		var re_n_a = $("#re_n_a").val();
		var le_d_s = $("#le_d_s").val();
		var le_d_c = $("#le_d_c").val();
		var le_d_a = $("#le_d_a").val();
		var le_n_s = $("#le_n_s").val();
		var le_n_c = $("#le_n_c").val();
		var le_n_a = $("#le_n_a").val();
		
		// for(var i=0;i<jArray.length;i++)
		// {
		// 	alert(jArray[i] + jArray.length);
		// }

		var m_name = $("#m_name").val();
		var m_time = $("#m_time").val();
		var m_duration = $("#m_duration").val();
		var m_pills = $("#m_pills").val();

		var e_name = $("#e_name").val();
		var e_time = $("#e_time").val();
		var e_duration = $("#e_duration").val();
		var e_drops = $("#e_drops").val();

		// var ot = $("#ot").val();
		var checkBoxOt = document.getElementById("ot");
		if (checkBoxOt.checked == true)
		{
			var ot = "ot";
		} 
		else
		{
			var ot = "";
		}
		var blood_sugar = $("#blood_sugar").val();
		var blood_pressure = $("#blood_pressure").val();
		var k1 = $("#k1").val();
		var k2 = $("#k2").val();
		var axial_length = $("#axial_length").val();
		var iol = $("#iol").val();

		if (name == '') 
		{
			alert("Insertion Failed Some Fields are Blank....!!");
		}
		else
		{
			// Returns successful data submission message when the entered information is stored in database.
			$.post("refreshform.php",
			{
				name1: name,
				age1: age,
				sex1: sex,
				address1: address,
				datee1: datee,

				history1: history,
				diagnosis1:diagnosis,
				advice1: advice,

				re_vision1: re_vision,
				le_vision1: le_vision,
				re_tension1: re_tension,
				le_tension1: le_tension,
				re_sac1: re_sac,
				le_sac1: le_sac,
				re_fundus1: re_fundus,
				le_fundus1: le_fundus,

				glasses1: glasses,
				re_d_s1: re_d_s,
				re_d_c1: re_d_c,
				re_d_a1: re_d_a,
				re_n_s1: re_n_s,
				re_n_c1: re_n_c,
				re_n_a1: re_n_a,
				le_d_s1: le_d_s,
				le_d_c1: le_d_c,
				le_d_a1: le_d_a,
				le_n_s1: le_n_s,
				le_n_c1: le_n_c,
				le_n_a1: le_n_a,

				// m_name1: m_name,
				m_time1: m_time,
				m_duration1: m_duration,
				m_pills1: m_pills,

				// e_name1: e_name,
				e_time1: e_time,
				e_duration1: e_duration,
				e_drops1: e_drops,

				ot1: ot,
				blood_sugar1: blood_sugar,
				blood_pressure1: blood_pressure,
				k11: k1,
				k21: k2,
				axial_length1: axial_length,
				iol1: iol,

			},
			function(data)
			{
				alert(data);
				// $('#form')[0].reset(); // To reset form fields
			});
		}
	});
});
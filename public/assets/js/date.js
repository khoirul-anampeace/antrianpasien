/* ====== Current Date & Time ====== */
// CurrentTIme
const getCurrentTimeDate = () => {
    let currentTimeDate = new Date();

    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Senin";
    weekday[2] = "Selasa";
    weekday[3] = "Rabu";
    weekday[4] = "Kamis";
    weekday[5] = "Jum'at";
    weekday[6] = "Sabtu";

    var month = new Array();
    month[0] = "Januari";
    month[1] = "Februari";
    month[2] = "Maret";
    month[3] = "April";
    month[4] = "Mei";
    month[5] = "Juni";
    month[6] = "Juli";
    month[7] = "Augustus";
    month[8] = "September";
    month[9] = "Oktober";
    month[10] = "November";
    month[11] = "Desember";

    var hours = currentTimeDate.getHours();

    var minutes = currentTimeDate.getMinutes();
    minutes = minutes < 10 ? '0' + minutes : minutes;

    var AMPM = hours >= 12 ? 'PM' : 'AM';

    if (hours === 12) {
        hours = 12;

    } else {

        hours = hours % 12;

    }
    var space = " | ";

    var currentTime = `${hours}:${minutes} ${AMPM}  ${space}`;


    var currentDay = weekday[currentTimeDate.getDay()];
    var currentDate = currentTimeDate.getDate();
    var currentMonth = month[currentTimeDate.getMonth()];
    var CurrentYear = currentTimeDate.getFullYear();

    var fullDate = `${currentDay}, ${currentMonth} ${currentDate}`;

    document.getElementById("time").innerHTML = currentTime;
    document.getElementById("date").innerHTML = fullDate;


    setTimeout(getCurrentTimeDate, 500);


}
getCurrentTimeDate();

/* ====== End Current Date & Time ====== */

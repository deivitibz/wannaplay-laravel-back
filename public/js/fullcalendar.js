document.addEventListener("DOMContentLoaded", function() {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "resourceTimeGridDay",
        resources: [
            {
                id: "pista_1",
                title: "Pista 1"
            },
            {
                id: "pista_2",
                title: "Pista 2"
            },
            {
                id: "pista_3",
                title: "Pista 3"
            },
            {
                id: "pista_4",
                title: "Pista 4"
            },
            {
                id: "pista_5",
                title: "Pista 5"
            }
        ],

    });

    calendar.render();
    calendar.on("dateClick", function(info) {
        console.log(info);
        calendar.addEvent({
            title: 'titulo',
            start: info.dateStr,
        } )
    });

});

function add() {
}

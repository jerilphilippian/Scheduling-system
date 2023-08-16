import Alpine from 'alpinejs'
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import './bootstrap';

window.Alpine = Alpine

Alpine.start()

document.addEventListener('DOMContentLoaded', function(){
    var calendarEl = document.getElementById('calendar');
    let calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin ],
        initialView: 'dayGridMonth',
        headerToolbar: {
          right: 'prev,next today',
          left: 'title',
        },
        events: async function (fetchInfo, successCallback) {
            const response = await fetch('/get-events');
            const events = await response.json();
            console.log(events);
            successCallback(events);
        },
        eventContent: function(info) {
            return {
                html: `<div class="bg-red-700 rounded w-full font-bold text-white p-2 whitespace-normal overflow-hidden text-ellipsis">${info.event.title}</div>`,
            };
        },
        eventClick: function(info) {
            console.log('Event clicked:', info.event.title);
        },
    });

    calendar.render()

})



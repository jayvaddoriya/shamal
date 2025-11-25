 
let table = new DataTable('#dataTable', { 
    scrollX: true
});
 

 

 
// Get all checkboxes
const checkboxes = document.querySelectorAll('.table .form-check-input');

// Add event listener to each checkbox
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        const tr = this.closest('tr'); // Find the parent tr
        if (this.checked) {
            tr.classList.add('highlight'); // Add class if checkbox is checked
        } else {
            tr.classList.remove('highlight'); // Remove class if checkbox is unchecked
        }
    });
});

$(window).on("load",function(){
    //Date range picker
    $('#dateRangePicker').daterangepicker();

    $('#timeOnly').daterangepicker({
    timePicker: true,
    timePicker24Hour: true,
    timePickerSeconds: false,
    autoUpdateInput: false,
    startDate: moment().startOf('day'),
    endDate: moment().startOf('day'),

    locale: {
        format: 'HH:mm'
    }
}, function(start, end) {
    $('#timeOnly').val(start.format('HH:mm') + ' - ' + end.format('HH:mm'));
});

// Add class to hide calendar only for this picker
$('#timeOnly').on('show.daterangepicker', function(ev, picker) {
    picker.container.addClass('time-only-picker');
});



    document.getElementById("checkboxDropdown")
    .addEventListener("click", function (e) {
        e.stopPropagation();   // prevent closing
    });
 ;
    
  });
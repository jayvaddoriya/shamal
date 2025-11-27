// SET SIDEMBAR COLLAPSE FOR SMALL SCREENS
$(window).on("load resize", function () {
    if (window.innerWidth < 1200) {
        $('body').addClass('sidebar-collapse');
    } else {
        $('body').removeClass('sidebar-collapse');
    }
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

   $('#dataTable').DataTable({ });




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


    // PREVENT MENU CLOSE IF CHECKBOX PRESENT
    const dropdowns = document.getElementsByClassName("checkboxDropdown"); 
    Array.from(dropdowns).forEach(function(drop) {
        drop.addEventListener("click", function(e) {
            e.stopPropagation(); // prevent dropdown close
        });
    });

 
    
  });
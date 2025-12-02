// SET SIDEMBAR COLLAPSE FOR SMALL SCREENS
$(window).on("load resize", function () {
    if (window.innerWidth < 1200) {
        $('body').addClass('sidebar-collapse');
    } else {
        $('body').removeClass('sidebar-collapse');
    }
});


 

// collapsed sidebar hover labels
document.querySelectorAll('.sidebar-menu .nav-item > a').forEach(link => {

    link.addEventListener('mouseenter', function () {
        // If sidebar is collapsed
        if (!document.body.classList.contains('sidebar-collapse')) return;

        const label = this.querySelector('.nav-label');
        if (!label) return;

        const tip = document.createElement('div');
        tip.className = 'sidebar-hover-label';
        tip.innerText = label.innerText;
        document.body.appendChild(tip);

        const rect = this.getBoundingClientRect();
        tip.style.top = rect.top + 'px';
        tip.style.left = rect.right + 10 + 'px';

        this._hoverTip = tip;
    });

    link.addEventListener('mouseleave', function () {
        if (this._hoverTip) this._hoverTip.remove();
    });

});

$(window).on("load",function(){
    $('.custom_select').select2();
   $('#dataTable').DataTable({ });
   $('#dataTable4').DataTable({ });

 
      const picker = new easepick.create({
        element: document.getElementById('dateRangePicker'),
        css: [
          'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css',
        ],
        plugins: ['RangePlugin'],
        RangePlugin: {
          tooltipNumber(num) {
            return num - 1;
          },
          locale: {
            one: 'night',
            other: 'nights',
          },
        },
      });
    

    //Date range picker
    // $('#dateRangePicker').daterangepicker();
    $('.datePicker').daterangepicker({
        singleDatePicker: true,
        autoUpdateInput: false,
        locale: {
            format: 'DD/MM/YYYY'
        }
    }, function(chosen_date) {
        $('.datePicker').val(chosen_date.format('DD/MM/YYYY'));
    });


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
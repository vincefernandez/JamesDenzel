$("#checkAll").click(function() {
    $('input:checkbox').not(this).prop('checked', this.checked);
});

$(document).ready(function() {
    $("#checkedAll").change(function() {
        if (this.checked) {
            $(".checkSingle").each(function() {
                this.checked = true;
            });
        } else {
            $(".checkSingle").each(function() {
                this.checked = false;
            });
        }
    });

    $(".checkSingle").click(function() {
        if ($(this).is(":checked")) {
            var isAllChecked = 0;

            $(".checkSingle").each(function() {
                if (!this.checked)
                    isAllChecked = 1;
            });

            if (isAllChecked == 0) {
                $("#checkedAll").prop("checked", true);
            }
        } else {
            $("#checkedAll").prop("checked", false);
        }
    });
});

const { default: swal } = require("sweetalert");


$('.button-collapse').sideNav();

$('.collapsible').collapsible();

$('select').material_select();


const sideNav = document.querySelector('.sidenav');
M.Sidenav.init(sideNav, {});
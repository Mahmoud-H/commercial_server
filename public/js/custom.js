function showLoading() {
    document.getElementById('loading-div').style.display = 'block';
}

function hideLoading() {
    document.getElementById('loading-div').style.display = 'none';
}

function swalSuccess(message) {
    Swal.fire({
        title: message,
        text: '',
        type: "success",
        // icon: 'success',
        timer: 2000,
        showConfirmButton: true,
        confirmButtonText: `حسنا`,
    });
    // hideLoading();
}

function swalError(error, period_time = 4000) {
    if(typeof(error) == 'string') {
        Swal.fire({
            title: errorMessage,
            text: error,
            // type: "error",
            icon: 'error',
            timer: period_time,
            showConfirmButton: false,
            showDenyButton: true,
            // confirmButtonText: `Save`,
            denyButtonText: `حسنا`,
        });
    } else {
        Swal.fire({
            title: errorMessage,
            html: convertCustomErrorObjectForSwalToString(error.response.data),
            // type: "error",
            icon: 'error',
            timer: period_time,
            showConfirmButton: false,
            showDenyButton: true,
            // confirmButtonText: `Save`,
            denyButtonText: `حسنا`,
        });
    }
    // hideLoading();
}

function swalConfirm(message,e,from = null,action='حسنا',url = null,) {
    e.preventDefault();
    Swal.fire({
        title: message,
        icon: 'warning',
        showDenyButton: true,
        // showCancelButton: true,
        // cancelButtonText: `إلغاء`,
        confirmButtonText: action,
        denyButtonText: `إلغاء`,
        // cancelButtonColor: "#DD6B55",
        confirmButtonColor: "#26a69a",
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            // Swal.fire('Saved!', '', 'success')
            if (from != null) {
                $(from).submit();
            }else if (url != null){
                window.location = url;
            }
        }
        // else if (result.isDenied) {
            // Swal.fire('Changes are not saved', '', 'info')
        // }
    })
}

function convertCustomErrorObjectForSwalToString(response) {
    var returned_string = '';

    if (response.message != undefined && response.errors != undefined) // custom error from helpers
    {
        if (response.errors instanceof Object) {
            $.each(response.errors, function (index, message) { // response is number of errors
                returned_string = returned_string + message + "<br>";
            });
        } else { // response is single text message
            returned_string = response.message + "<br>";
        }
    } else { // laravel error
        $.each(response, function (index, message) {
            returned_string = returned_string + message + "<br>";
        });
    }

    return returned_string;
}

function redirectTo(link) {
    hideLoading();
    window.location.replace(BASE_URL+link);
}

function goBack() {
    var oldURL = document.referrer;

    if(oldURL.includes(ORGINAL_URL))  {
        window.history.back();
    } else {
        window.location = "#/";
    }
}

function initOrgchart(jsonarray) {
    $('#chart-container').orgchart({
        'data' : jsonarray,
        'depth': 10,
        'nodeContent': 'title',
        'exportButton': true,
        'nodeID': 'id',
        'createNode': function($node, data) {
            var secondMenuIcon = $('<i>', {
                'class': 'fa fa-info-circle second-menu-icon',
                click: function() {
                    $(this).siblings('.second-menu').toggle();
                }
            });
            // var secondMenu = '<div class="second-menu"><img class="avatar" src="../img/avatar/' + data.id + '.jpg"></div>';
            var secondMenu = '';
            $node.append(secondMenuIcon).append(secondMenu);
        }
    });
}

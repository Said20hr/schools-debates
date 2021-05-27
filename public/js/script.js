$(function() {

    $('a[data-toggle="tab"]').on('click', function (e) {
        localStorage.setItem('lastTab', $(this).attr('href'));
    });
    var lastTab = localStorage.getItem('lastTab');

    if (lastTab) {
        $('[href="' + lastTab + '"]').tab('show');
    }
    $(document).on('click', '.plus', function(e) {
        var i =$(this).attr('data-id');
        $('.card-'+i).slideToggle('fast');
    });
    $(document).on('click', '.plus-2', function(e) {
        var i =$(this).attr('data-id');
        $('.card-2-'+i).slideToggle('fast');
    });
    $(document).on('click', '.plus-3', function(e) {
        var i =$(this).attr('data-id');
        $('.card-3-'+i).slideToggle('fast');
    });
    $(document).on('click', '.plus-4', function(e) {
        var i =$(this).attr('data-id');
        $('.card-4-'+i).slideToggle('fast');
    });
    $(document).on('click', '.plus-5', function(e) {
        var i =$(this).attr('data-id');
        $('.card-5-'+i).slideToggle('fast');
    });
    $(document).on('click', '.add', function(e) {
        var N;
        var i = $(this).attr('data-id');
        $(this).remove();
        i++;
        N=i+1;
        $('.field').append('' +
            '<div class="col-md-12 list-group m-tb-28">\n' +
            '<div class="list-group-item active">\n' +
            '<div class="panel-heading d-flex justify-content-between align-items-center p-tb-7 drop" data-target="'+N+'" style="display: flex;justify-content: space-between;cursor: pointer;">\n' +
            '<div class="font-weight-bolder fs-22">  اضافة المشاركة '+N+'</div>\n' +
            '<i class="fa fa-angle-down fs-22 "></i>\n' +
            '</div>\n' +
            '</div>' +
            '<div class="list-group list'+N+' bor3">\n' +
            '<div class="list-group-item col-md-12">\n' +
            '<div class="form-group">\n' +
            '<label class="control-label fs-22 font-weight-bolder">اسم البطولة او النشاط</label>\n' +
            '<input type="text" class="form-control p-tb-10 clblack fs-20" name="tournament['+i+'][name]" placeholder="اسم...">\n' +
            '</div>\n' +
            '</div>\n' +
            '<div class="list-group-item col-md-12">\n' +
            '<div class="form-group">\n' +
            '<label class="control-label fs-22 font-weight-bolder">تفاصيل البطولة او النشاط</label>\n' +
            '<textarea  class="form-control p-tb-10 clblack fs-18" name="tournament['+i+'][description]" rows="6">تفاصيل... </textarea> </div></div>\n' +
            '<div class="list-group-item col-md-12 p-lr-28">\n' +
            '<div class="control-label fs-22 font-weight-bolder mb-2">تمميز</div>\n' +
            '<label class="c-switch c-switch-label c-switch-opposite-success">\n' +
            '<input class="c-switch-input" type="checkbox" name="tournament['+i+'][feature]">\n' +
            '<span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>\n' +
            '</label>\n' +
            ' </div>\n' +
            '<div class="list-group-item col-md-12 p-lr-28">\n' +
            '<div class="form-group ">\n' +
            '<label class="control-label fs-22 font-weight-bolder">نوع البطولة</label>\n' +
            '<div class=col-form-label">\n' +
            '<div class="form-check">\n' +
            '<input class="form-check-input" id="radio1-['+i+']" type="radio" value="البطولات الرسمية الدولية" name="tournament['+i+'][type]">\n' +
            '<label class="form-check-label fs-22" for="radio1-['+i+']">البطولات الرسمية الدولية</label>\n' +
            '</div>\n' +
            '<div class="form-check fs-22">\n' +
            '<input class="form-check-input mb-2" id="radio3-['+i+']" type="radio" value="البطولات الرسمية المحليه" name="tournament['+i+'][type]">\n' +
            '<label class="form-check-label " for="radio3-['+i+']"> البطولات الرسمية المحليه</label>\n' +
            '</div>\n' +
            '<div class="form-check">\n' +
            '<input class="form-check-input" id="radio2-['+i+']" type="radio" value="البطولات التفاعليه" name="tournament['+i+'][type]">\n' +
            '<label class="form-check-label fs-22" for="radio2-['+i+']"> البطولات التفاعليه</label>\n' +
            '</div>\n' +
            '<div class="form-check">\n' +
            '<input class="form-check-input" id="radio3-['+i+']" type="radio" value="البطولات المفتوحه" name="tournament['+i+'][type]">\n' +
            '<label class="form-check-label fs-22" for="radio3-['+i+']">البطولات المفتوحه</label>\n' +
            '</div>\n' +
            '\n' +
            '<div class="form-check">\n' +
            '<input class="form-check-input" id="radio3-['+i+']" type="radio" value="الانشطه و الفعاليات في مجال المناظرات" name="tournament['+i+'][type]">\n' +
            '<label class="form-check-label fs-22" for="radio3-['+i+']">الانشطه و الفعاليات في مجال المناظرات</label>\n' +
            '</div>\n' +
            '</div>\n' +
            '</div>\n' +
            '</div>\n' +
            '<div class="list-group-item col-md-12">\n' +
            '<div class="d-flex text-end justify-content-start text-right">\n' +
            '<button type="button" class="btn btn-primary btn-lg add fs-20 p-tb-10 p-lr-10" data-id="'+i+'" >اضف مشاركة\n' +
            '<i class="fa fa-plus"></i></button>\n' +
            '</div>\n' +
            ' </div>\n' +
            '</div></div>');});
    $(document).on('click', '.drop', function(e) {
        var number =$(this).attr('data-target');
        $('.list'+number).toggle("fast");
    });


});

$(function(){
	$("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Enviar",
            next: "Próximo",
            previous: "Anterior"
        }
    });
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custome Jquery Step Button
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Select Dropdown
    $('html').click(function() {
        $('.select .dropdown').hide(); 
    });
    $('.select').click(function(event){
        event.stopPropagation();
    });
    $('.select .select-control').click(function(){
        $(this).parent().next().toggle();
    })    
    $('.select .dropdown li').click(function(){
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })
})

$(document).ready(function() {

    //upload
    var readUrl = function(input) {
        if(input.files && input.files[0]) {

            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function(e) {
                $("#img").attr('src',e.target.result);
            }

        }
    }
    $("#upload").on('change',function(){
     readUrl(this);
    });
    $("#img").click(function() {
        var btn = $("#upload");
        btn.trigger('click');
    });

    $(".action").css('bottom','0px');   
});

$(document).ready(function() {

    //upload1
    var readUrl = function(input) {
        if(input.files && input.files[0]) {

            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function(e1) {
                $("#img1").attr('src',e1.target.result);
            }
        }
    }
    $("#upload1").on('change',function() {
        readUrl(this);
    });
    $("#img1").click(function() {
        var btn1 = $("#upload1");
        btn1.trigger('click');
    });
   
});

$(document).ready(function() {

    //upload2
    var readUrl = function(input) {
        if(input.files && input.files[0]) {

            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function(e2) {
                $("#img2").attr('src',e2.target.result);
            }
        }
    }
    $("#upload2").on('change',function() {
        readUrl(this);
    });
    $("#img2").click(function() {
        var btn2 = $("#upload2");
        btn2.trigger('click');
    });
});
    




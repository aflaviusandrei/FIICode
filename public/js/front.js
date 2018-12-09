/** * Created by Catalin on 2/28/2016. */
$('.mobile .button.dropdown').dropdown();
$(document).on('mouseover', '#homecover .ui.button.web', function() {
    $('.backgroundhome.web').addClass('show');
}).on('mouseleave', '#homecover .ui.button', function() {
    $('.backgroundhome.web').removeClass('show');
});
$(document).on('mouseover', '#homecover .ui.button.gamedev', function() {
    $('.backgroundhome.gamedev').addClass('show');
}).on('mouseleave', '#homecover .ui.button', function() {
    $('.backgroundhome.gamedev').removeClass('show');
});
$(document).on('mouseover', '#homecover .ui.button.algo', function() {
    $('.backgroundhome.algo').addClass('show');
}).on('mouseleave', '#homecover .ui.button', function() {
    $('.backgroundhome.algo').removeClass('show');
});
$('.ui.dropdown').dropdown();
$('.contactForm').form({
    fields: {
        nume: 'empty',
        email: 'email',
        subiect: 'empty',
        mesaj: 'empty'
    }
});

$('.formularDeInscriere').form();

$(document).ready(function() {
    algo = false;
    web = false;
    gamedev = false;
    if ($('#web').is(':checked')) {
        web = true;
        $('.selectCategorie').hide();
        $('.algoOnly').hide();
        $('.gamedevOnly').hide();
        $('.webOnly').show();
    } else {
        web = false;
        $('.selectCategorie').hide();
    }
    if ($('#algo').is(':checked')) {
        algo = true;
        $('.webOnly').hide();
        $('.gamedevOnly').hide();
        $('.algoOnly').show();
    } else {
        algo = false;
    }
    if ($('#gamedev').is(':checked')) {
        gamedev = true;
        $('.algoOnly').hide();
        $('.webOnly').hide();
        $('.gamedevOnly').show();
    } else {
        gamedev = false;
        $('.selectCategorie').hide();
    }
    if (!$('#algo').is(':checked') && !$('#web').is(':checked') && !$('#gamedev').is(':checked')) {
        $('#web').prop("checked", true);
        web = true;
        $('.selectCategorie').hide();
        $('.algoOnly').hide();
        $('.gamedevOnly').hide();
        $('.webOnly').show();
    }
});
$(document).on('change', 'input[name=sectiune]', function() {
    if ($('#algo').is(':checked')) {
        algo = true;
        $('.algoDesc').attr('style', 'display:block;');
        $('.selectCategorie').hide();
        $('.webOnly').hide();
        $('.gamedevOnly').hide();
        $('.algoOnly').show();
        web = false;
        gamedev = false;
        $('.webDesc').attr('style', 'display:none;');
        $('.gamedevDesc').attr('style', 'display:none;');
    }
    if ($('#web').is(':checked')) {
        web = true;
        $('.selectCategorie').hide();
        $('.webDesc').attr('style', 'display:block;');
        $('.algoOnly').hide();
        $('.gamedevOnly').hide();
        $('.webOnly').show();
        algo = false;
        gamedev = false;
        $('.algoDesc').attr('style', 'display:none;');
        $('.gamedevDesc').attr('style', 'display:none;');
    }
    if ($('#gamedev').is(':checked')) {
        gamedev = true;
        $('.selectCategorie').hide();
        $('.gamedevDesc').attr('style', 'display:block;');
        $('.algoOnly').hide();
        $('.webOnly').hide();
        $('.gamedevOnly').show();
        algo = false;
        web = false;
        $('.algoDesc').attr('style', 'display:none;');
        $('.webDesc').attr('style', 'display:none;');
    }

});
$(document).on("change", ".dropdown select[name=has_team]", function(){
	if(web && parseInt(this.value) == 0){
		$(".field input[name=numeproiect]").parent().slideUp();
		$(".field input[name=nume2]").parent().slideUp();
		$(".field input[name=nume3]").parent().slideUp();
		$(".field input[name=email2]").parent().slideUp();
		$(".field input[name=email3]").parent().slideUp();
	}else{
		$(".field input[name=numeproiect]").parent().slideDown();
		$(".field input[name=nume2]").parent().slideDown();
		$(".field input[name=nume3]").parent().slideDown();
		$(".field input[name=email2]").parent().slideDown();
		$(".field input[name=email3]").parent().slideDown();
	}
});

$(document).on('submit', '.formularDeInscriere', function() {

    if (web || algo || gamedev) {
        if ($('.error').length == 0) {
            $('.ui.message').hide();
            var info = $('.formularDeInscriere').form('get values');
            $('.formularDeInscriere .submit').addClass('loading');
            info['g-recaptcha-response'] = $('textarea[name=g-recaptcha-response]').val();
            info['email2'] = $('input[name=email2]').val();
            $.post('/request/inscrie', info, function() {
                $('.aplicareTrimisa').show().removeClass('aplicareTrimisa');
                if (web == true) {
                    $('.mesajWeb').show().removeClass('aplicareTrimisa');
                }
                if (algo == true) {
                    $('.mesajWeb').show().removeClass('aplicareTrimisa');
                }
                if (gamedev == true) {
                    $('.mesajWeb').show().removeClass('aplicareTrimisa');
                }
                // $('.formularDeInscriere').form('clear');
                // algo = false;
                // web = false;
                // gamedev = false;
                $('.formularDeInscriere').find("input[type=text], input[type=password], textarea").val("");

            }).fail(function(response) {
				const result = response.responseJSON;
				Object.keys(result).forEach(function(key,index) {
					$("input[name="+key+"]").parent().addClass('error');
					$("select[name="+key+"]").parent().addClass('error');

					$("input[name="+key+"]").parent().append("<span class='error-message'>"+result[key][0]+"</span>");

				});
                $('.erroareTehnica').show();
            }).always(function() {
                $('.formularDeInscriere .submit').removeClass('loading');
            });
        }
    } else {
        $('.selectCategorie').show();
    }
});

$('select').on('change', function() {
	if(this.value !== "") {
		$(this).parent().removeClass('error');
		$(this).parent().find('.error-message').remove();
	}
});

$('input').on('change', function() {
	$(this).parent().removeClass('error');
	$(this).parent().find('.error-message').remove();
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('click', '.apreciaza', function() {
    var id = $(this).attr('data-id');
    var obj = this;
    $.post('/requests/apreciaza', {
        id: id
    }, function(data) {
        if (data != 0) {
            $(obj).addClass('animated pulse');
            $(obj).parent().find('.right.floated.star').html(data + " aprecieri");
            $(obj).find('i').addClass('red');
        }
    });
});
$(document).on('submit', '.contactForm', function() {
    $('.contactForm .submit').addClass('loading');
    var name = $('.contactForm input[name=nume]').val();
    var email = $('.contactForm input[name=email]').val();
    var subiect = $('.contactForm input[name=subiect]').val();
    var mesaj = $('.contactForm textarea[name=mesaj]').val();
    $.post('/requests/sendContact', {
        name: name,
        email: email,
        subiect: subiect,
        mesaj: mesaj
    }, function(data) {
        $('.ui.success.message').show();
    }).fail(function() {
        $('.ui.warning.message').show();
    }).always(function() {
        $('.contactForm .submit').removeClass('loading');
        $('.contactForm input[name=nume]').val('');
        $('.contactForm input[name=email]').val('');
        $('.contactForm input[name=subiect]').val('');
        $('.contactForm textarea[name=mesaj]').val('');
    });
});
$(document).on('submit', '.loginForm', function(event) {
    $('.loginForm .submit').addClass('loading');
    if ($('.loginForm').form('is valid')) {
        var data = $('.loginForm').form('get values');
        $.post('/request/login', data, function(data) {
            if (data == "error") {
                $('.loginForm').form('reset');
                $('.loginForm .submit').removeClass('loading');
                $('.ui.message.error').show();
                setTimeout(function() {
                    $('.ui.message.error').hide();
                }, 4000);
            } else {
                window.location.href = data;
            }
        });
    } else {
        $('.loginForm .submit').removeClass('loading');
    }
});
$('.loginForm').form({
    fields: {
        email: 'email',
        password: 'minLength[6]'
    }
});
$(document).on('click', '.saveRepo', function() {
    var repo = $('#githubRepo').val();
    var prezentare = $('#prezentare').val();
    $(this).addClass('loading');
    $.post('/request/saveRepo', {
        repo: repo,
        prezentare: prezentare
    }, function(data) {
        $('.saveRepo').removeClass('loading');
        if (data == 1) {
            $('.ui.message.success').show();
            setTimeout(function() {
                $('.ui.message.success').hide();
            }, 5000);
        }
    }).fail(function() {
        $('.saveRepo').removeClass('loading');
        $('.ui.message.error').show();
        setTimeout(function() {
            $('.ui.message.error').hide();
        }, 5000);
    });
});
$(document).on('click', '.savePass', function() {
    var email = $('input[name=email]').val();
    var password = $('input[name=password]').val();
    var confirm = $('input[name=confirmpassword]').val();
    if (password == confirm) {
        $('.savePass').addClass('loading');
        $('.confi').removeClass('error');
        $.post('/request/changepass', {
            email: email,
            password: password
        }, function(data) {
            $('.savePass').removeClass('loading');
            if (data == 1) {
                $('.ui.message.success').show();
                setTimeout(function() {
                    $('.ui.message.success').hide();
                    window.location.href = '/login';
                }, 5000);
            } else {
                $('.ui.message.error').show();
                setTimeout(function() {
                    $('.ui.message.error').hide();
                }, 5000);
            }
        });
    } else {
        $('.confi').addClass('error');
    }
});

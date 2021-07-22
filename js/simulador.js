//MASTER-------------------------

//AMBIENTES------

$('#menumaster1 a').click(function(e){
     hideContentDivsMas1();
     var tmp_div = $(this).parent().index();
     $('.mainmaster1 div').eq(tmp_div).show();
  });

//PAINEIS------
$('#menumaster2 a').click(function(e){
     hideContentDivsMas2();
     var tmp_div = $(this).parent().index();
     $('.mainmaster2 div').eq(tmp_div).show();
  });

//PORTAS------
$('#menumaster3 a').click(function(e){
     hideContentDivsMas3();
     var tmp_div = $(this).parent().index();
     $('.mainmaster3 div').eq(tmp_div).show();
  });

//MICTORIOS------
$('#menumaster4 a').click(function(e){
     hideContentDivsMas4();
     var tmp_div = $(this).parent().index();
     $('.mainmaster4 div').eq(tmp_div).show();
  });

//PEÇAS------
$('#menumaster5 a').click(function(e){
     hideContentDivsMas5();
     var tmp_div = $(this).parent().index();
     $('.mainmaster5 div').eq(tmp_div).show();
  });




function hideContentDivsMas1(){
    $('.mainmaster1 div').each(function(){
    $(this).hide();});
}
// hideContentDivsMas1();


function hideContentDivsMas2(){
    $('.mainmaster2 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas2();


function hideContentDivsMas3(){
    $('.mainmaster3 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas3();


function hideContentDivsMas4(){
    $('.mainmaster4 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas4();


function hideContentDivsMas5(){
    $('.mainmaster5 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas5();




//LITE-------------------------

//AMBIENTES------

$('#menulite1 a').click(function(e){
     hideContentDivsMas6();
     var tmp_div = $(this).parent().index();
     $('.mainlite1 div').eq(tmp_div).show();
  });

//PAINEIS------
$('#menulite2 a').click(function(e){
     hideContentDivsMas7();
     var tmp_div = $(this).parent().index();
     $('.mainlite2 div').eq(tmp_div).show();
  });

//PORTAS------
$('#menulite3 a').click(function(e){
     hideContentDivsMas8();
     var tmp_div = $(this).parent().index();
     $('.mainlite3 div').eq(tmp_div).show();
  });

//MICTORIOS------
$('#menulite4 a').click(function(e){
     hideContentDivsMas9();
     var tmp_div = $(this).parent().index();
     $('.mainlite4 div').eq(tmp_div).show();
  });

//PEÇAS------
$('#menulite5 a').click(function(e){
     hideContentDivsMas10();
     var tmp_div = $(this).parent().index();
     $('.mainlite5 div').eq(tmp_div).show();
  });





function hideContentDivsMas6(){
    $('.mainlite1 div').each(function(){
    $(this).hide();});
}
// hideContentDivsMas6();


function hideContentDivsMas7(){
    $('.mainlite2 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas7();


function hideContentDivsMas8(){
    $('.mainlite3 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas8();


function hideContentDivsMas9(){
    $('.mainlite4 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas9();


function hideContentDivsMas10(){
    $('.mainlite5 div').each(function(){
    $(this).hide();});
}
hideContentDivsMas10();
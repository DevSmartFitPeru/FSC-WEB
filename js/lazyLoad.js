$(document).ready(function(){
    $("#OrganismoIMG").css("display", "none");
    $("#LaboratorioIMG").css("display", "block");


    $("img.lazyload").lazyload({
        effect : "fadeIn"
    });


    // tab-content
    
	
    $("#laboratorio").click(function(){
        $("#OrganismoIMG").css("display", "none");
        $("#LaboratorioIMG").css("display", "block");
        $("#laboratorio").css("color","red");
        $("#organismo").css("color","white");
    })

    $("#organismo").click(function(){
        $("#LaboratorioIMG").css("display", "none");
        $("#OrganismoIMG").css("display", "block");
        $("#organismo").css("color","red");
        $("#laboratorio").css("color","white");
    })

    // SCROLL CON EFECTO

    if ($('#NosotrosFSC').offset().top < top) {
        $('li').removeClass('current');
        $('li#NosotrosFSCid').addClass('current');
     
       
    }

	
})
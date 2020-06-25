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
    })

    $("#organismo").click(function(){
        $("#LaboratorioIMG").css("display", "none");
        $("#OrganismoIMG").css("display", "block");
    })

    // SCROLL CON EFECTO

    if ($('#NosotrosFSC').offset().top < top) {
        $('li').removeClass('current');
        $('li#NosotrosFSCid').addClass('current');
     
       
    }

	
})
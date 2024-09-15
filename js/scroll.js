$(document).ready(function(){
    $('li').removeClass('current');
    //$("#InicioFSCid").addClass('active');

    var navbarHeight = 20;
    var didScroll = false;

    $(window).scroll(function() {
        didScroll = true;
    });

    setInterval(function() {
    if (didScroll) {
        didScroll = false;
        // Check your page position and then
        // Load in more results
        var top = $(window).scrollTop() + navbarHeight;
        
        
        
        
        
        
        if ($('.main-slider').offset().top < top) {
            $('ul.navigation li').removeClass('current');
            $('li#InicioFSCid').addClass('current');
            
        }

        if ($('#NosotrosFSC').offset().top < top) {
            $('ul.navigation li').removeClass('current');
            $('li#NosotrosFSCid').addClass('current');
            $('div#NosotrosFSC').addClass('animated fadeIn')
        }

        if ($('#LaboratorioFSC').offset().top < top) {
            $('ul.navigation li').removeClass('current');
            $('li#LaboratorioFSCid').addClass('current');
            $('div#LaboratorioFSC').removeClass('animated fadeIn') //QUITAMOS LA CLASE ANTERIOR AL SUBIR
        } 
                
        if ($('#InspeccionFSC').offset().top < top) {
            $('ul.navigation li').removeClass('current');
            $('li#InspeccionFSCid').addClass('current');
            $('div#InspeccionFSC').removeClass('animated fadeIn')
        }

        if ($('#ClientesFSC').offset().top < top) {
            $('ul.navigation li').removeClass('current');
            $('li#ClientesFSid').addClass('current');
            $('div#ClientesFSC').removeClass('animated fadeIn');
        } 

        if ($('#ContactoFSC').offset().top < top) {
            $('ul.navigation li').removeClass('current');
            $('li#ContactoFSid').addClass('current');
            $('#ContactoFSC').removeClass('animated fadeIn');
        }
        
        
        
        
        
        
        
        
        
    
    	// Clientes Tabs
    	$("#InicioFSCid").click(function(){
    		$('ul.navigation li').removeClass('active');
    		$("#InicioFSCid").addClass('active');
    	})
    
    	$("#LaboratorioFSCid").click(function(){
    		$('ul.navigation li').removeClass('active');
    		$("#LaboratorioFSCid").addClass('active');
    	})
    
    	$("#InspeccionFSCid").click(function(){
    		$('ul.navigation li').removeClass('active');
    		$("#InspeccionFSCid").addClass('active');
    	})
    
    	$("#ClientesFSCid").click(function(){
    		$('ul.navigation li').removeClass('active');
    		$("#ClientesFSCid").addClass('active');
    	})
    
    	$("#ContactoFSCid").click(function(){
    		$('ul.navigation li').removeClass('active');
    		$("#ContactoFSCid").addClass('active');
    	})
    
    	$("#NosotrosFSCid").click(function(){
    		$('ul.navigation li').removeClass('active');
    		$("#NosotrosFSCid").addClass('active');
    	})
	
	
	
    }
    }, 100);


    var ano = (new Date).getFullYear();
    $("#Año").text( ano );

})

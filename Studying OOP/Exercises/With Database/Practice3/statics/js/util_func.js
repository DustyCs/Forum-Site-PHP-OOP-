$(document).ready(function() { 
        console.log($('input[name=player]:checked', '#player_form').val());         
        console.log($('input[name=enemy]:checked', '#enemy_form').val());
});

// Animation Function

const noPlayerInput = () => {
        $(".no_input_popup").show('fast');
        setTimeout(function () {
                $(".no_input_popup").fadeOut('fast');
        }, 1000)
}

// Bugs

const bugTest = () => {
        console.log('test');
}

const refreshScore = () => {
        $('#refresh').removeClass("refreshAnimation");
        $(".scores_tab").hide('fast');
        setTimeout(function(){
                $('#refresh').addClass("refreshAnimation");

                setTimeout(function(){
                $(".scores_tab").show('fast');
                $(".scores_tab").load("includes/score_tab.inc.php");}, 900)

        }, 500)
}
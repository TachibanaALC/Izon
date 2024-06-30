window.addEventListener('load', ()=>{

    const select = document.getElementById('kind');

    select.onchange = adjust_unit;

    function adjust_unit(){
        
        let selected_kind = select.options[select.selectedIndex].value
        
        let unit;

        if(selected_kind === "caffein") unit = "mg";
        if(selected_kind === "snack") unit = "kcal";

        document.getElementById("consumed_unit_text").innerHTML = unit;
    }
});
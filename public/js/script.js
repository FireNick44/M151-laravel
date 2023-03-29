
document.addEventListener("DOMContentLoaded", function(){
    status();
});

async function status() {

    if(document.getElementById("flash") !== null){
        await delay(3000);
        document.getElementById("flash").classList.toggle("flashed");
    }
}

const delay = ms => new Promise(res => setTimeout(res, ms));

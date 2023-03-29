
document.addEventListener("DOMContentLoaded", function(){
    status();
});

async function status() {

    var status_update = document.getElementById("flash") !== null;

    console.log(status_update)

    if(status_update){
        await delay(3000);

        let x = document.getElementById("flash")
        x.classList.toggle("flashed");
    }
}

const delay = ms => new Promise(res => setTimeout(res, ms));

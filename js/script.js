let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

  menu.onclick = () =>{
      menu.classList.toggle('fa-times');
      navbar.classList.toggle('active');
  }
  
  window.onscroll = () =>{
      menu.classList.remove('fa-times');
      navbar.classList.remove('active');
  }


// Start of runnig limit script 
const upcount = document.getElementById('count-doctor');
const spatient = document.getElementById('satisfied-patients'); 
const avaiHospital = document.getElementById('avail-hospital');
const pharmac = document.getElementById('pharmacy');

let count = 0;
let pcount = 0;
let availCount = 0;
let pharmCount = 0;

function updateCountDisplay() {
  upcount.innerText = count.toString();
  spatient.innerText = pcount.toString();
  avaiHospital.innerText = availCount.toString();
  pharmac.innerText = pharmCount.toString();
}

function incrementCounts() {
  if (count < 150) {
    count++;
  }
  if (pcount < 1030) {
    pcount++;
  }
  if (availCount < 70) {
    availCount++;
  }
  if (pharmCount < 490) {
    pharmCount++;
  }
  updateCountDisplay();

  // Stop counting when all limits are reached
  if (count >= 150 && pcount >= 1030 && availCount >= 70 && pharmCount >= 490) {
    clearInterval(countInterval);
  }
}

const countInterval = setInterval(incrementCounts, 10);

// End of runnig limit script 
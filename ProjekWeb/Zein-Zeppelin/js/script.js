// Toggle class active hamburger menu
const navbarNav = document.querySelector(".navbar-nav");
// ketika hamburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik di luar elemen
const hm = document.querySelector('#hamburger-menu');

document.addEventListener('click', function(e){
    if(!hm.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});

let sectionMakanan = document.getElementById('makanan');
let sectionMinuman = document.getElementById('minuman');
let sectionDessert = document.getElementById('dessert');

function openMakanan() {
  sectionMakanan.style.display = "block";
  sectionMinuman.style.display = "none";
  sectionDessert.style.display = "none";
}

function openMinuman() {
  sectionMakanan.style.display = "none";
  sectionMinuman.style.display = "block";
  sectionDessert.style.display = "none";
}

function openDessert() {
  sectionMakanan.style.display = "none";
  sectionMinuman.style.display = "none";
  sectionDessert.style.display = "block";
}

// Modal Box Makanan
const itemDetailModal1 = document.querySelector('#item-detail-modal1');
const itemDetailButtonMak1 = document.querySelector('.item-detail-button-mak1');
const itemDetailModal2 = document.querySelector('#item-detail-modal2');
const itemDetailButtonMak2 = document.querySelector('.item-detail-button-mak2');
const itemDetailModal3 = document.querySelector('#item-detail-modal3');
const itemDetailButtonMak3 = document.querySelector('.item-detail-button-mak3');
const itemDetailModal4 = document.querySelector('#item-detail-modal4');
const itemDetailButtonMak4 = document.querySelector('.item-detail-button-mak4');
const itemDetailModal5 = document.querySelector('#item-detail-modal5');
const itemDetailButtonMak5 = document.querySelector('.item-detail-button-mak5');


  itemDetailButtonMak1.onclick = (e) => {
    itemDetailModal1.style.display = 'flex';
    e.preventDefault();
};
  itemDetailButtonMak2.onclick = (e) => {
    itemDetailModal2.style.display = 'flex';
    e.preventDefault();
};
  itemDetailButtonMak3.onclick = (e) => {
    itemDetailModal3.style.display = 'flex';
    e.preventDefault();
};
  itemDetailButtonMak4.onclick = (e) => {
    itemDetailModal4.style.display = 'flex';
    e.preventDefault();
};
  itemDetailButtonMak5.onclick = (e) => {
    itemDetailModal5.style.display = 'flex';
    e.preventDefault();
};

// klik tombol close modal
document.querySelector('.modal .close-icon1').onclick = (e) => {
  itemDetailModal1.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon2').onclick = (e) => {
  itemDetailModal2.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon3').onclick = (e) => {
  itemDetailModal3.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon4').onclick = (e) => {
  itemDetailModal4.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon5').onclick = (e) => {
  itemDetailModal5.style.display = 'none';
  e.preventDefault();
}


// Modal Box Minuman
const itemDetailModalMin1 = document.querySelector('#item-detail-modal-min1');
const itemDetailButtonMin1 = document.querySelector('.item-detail-button-min1');
const itemDetailModalMin2 = document.querySelector('#item-detail-modal-min2');
const itemDetailButtonMin2 = document.querySelector('.item-detail-button-min2');
const itemDetailModalMin3 = document.querySelector('#item-detail-modal-min3');
const itemDetailButtonMin3 = document.querySelector('.item-detail-button-min3');
const itemDetailModalMin4 = document.querySelector('#item-detail-modal-min4');
const itemDetailButtonMin4 = document.querySelector('.item-detail-button-min4');
const itemDetailModalMin5 = document.querySelector('#item-detail-modal-min5');
const itemDetailButtonMin5 = document.querySelector('.item-detail-button-min5');

itemDetailButtonMin1.onclick = (e) => {
  itemDetailModalMin1.style.display = 'flex';
  e.preventDefault();
};
itemDetailButtonMin2.onclick = (e) => {
  itemDetailModalMin2.style.display = 'flex';
  e.preventDefault();
};
itemDetailButtonMin3.onclick = (e) => {
  itemDetailModalMin3.style.display = 'flex';
  e.preventDefault();
};
itemDetailButtonMin4.onclick = (e) => {
  itemDetailModalMin4.style.display = 'flex';
  e.preventDefault();
};
itemDetailButtonMin5.onclick = (e) => {
  itemDetailModalMin5.style.display = 'flex';
  e.preventDefault();
};

document.querySelector('.modal .close-icon-min1').onclick = (e) => {
  itemDetailModalMin1.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon-min2').onclick = (e) => {
  itemDetailModalMin2.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon-min3').onclick = (e) => {
  itemDetailModalMin3.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon-min4').onclick = (e) => {
  itemDetailModalMin4.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon-min5').onclick = (e) => {
  itemDetailModalMin5.style.display = 'none';
  e.preventDefault();
}

// Modal Box Dessert
const itemDetailModalDes1 = document.querySelector('#item-detail-modal-des1');
const itemDetailButtonDes1 = document.querySelector('.item-detail-button-des1');
const itemDetailModalDes2 = document.querySelector('#item-detail-modal-des2');
const itemDetailButtonDes2 = document.querySelector('.item-detail-button-des2');
const itemDetailModalDes3 = document.querySelector('#item-detail-modal-des3');
const itemDetailButtonDes3 = document.querySelector('.item-detail-button-des3');

itemDetailButtonDes1.onclick = (e) => {
  itemDetailModalDes1.style.display = 'flex';
  e.preventDefault();
};
itemDetailButtonDes2.onclick = (e) => {
  itemDetailModalDes2.style.display = 'flex';
  e.preventDefault();
};
itemDetailButtonDes3.onclick = (e) => {
  itemDetailModalDes3.style.display = 'flex';
  e.preventDefault();
};

document.querySelector('.modal .close-icon-des1').onclick = (e) => {
  itemDetailModalDes1.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon-des2').onclick = (e) => {
  itemDetailModalDes2.style.display = 'none';
  e.preventDefault();
}
document.querySelector('.modal .close-icon-des3').onclick = (e) => {
  itemDetailModalDes3.style.display = 'none';
  e.preventDefault();
}

var sensor = ['anjing', 'bangsat', 'babi'];

function replaceTextInElements(elements){
  elements.forEach(function(element) {
    var originalText = element.textContent;

    var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function(match) {
      return '*'.repeat(match.length);
    });
    element.textContent = newText;
  });
}

var messageElements = document.querySelectorAll('p#komen');

replaceTextInElements(messageElements);
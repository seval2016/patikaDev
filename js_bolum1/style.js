// Kullanıcıdan ismi almak için prompt kullanıyoruz
let userName = prompt("Lütfen isminizi girin:");

// HTML'e ismi yerleştiriyoruz
document.getElementById('myName').innerText = userName;

// Saat ve tarih göstermek için bir fonksiyon
function showTime() {
  const now = new Date();
  const options = { 
    weekday: 'long', 
    year: 'numeric', 
    month: 'long', 
    day: 'numeric', 
    hour: '2-digit', 
    minute: '2-digit', 
    second: '2-digit',
    hour12: false
  };
  
  // Tarih ve saati formatlıyoruz
  const formattedDate = now.toLocaleDateString('tr-TR', options);

  // HTML elementine saat ve tarihi ekliyoruz
  document.getElementById('myClock').innerText = formattedDate;
}

// Sayfa yüklendiğinde saati göster
window.onload = function() {
  showTime();
  // Saatin her saniye güncellenmesi için setInterval kullanıyoruz
  setInterval(showTime, 1000);
};

// script.js

// Yeni bir öğe eklemek için kullanılacak fonksiyon
function newElement() {
    const taskInput = document.getElementById('task');
    const taskValue = taskInput.value.trim();
  
    // Eğer input boşsa, hata toast mesajı göster
    if (taskValue === "") {
      showErrorToast();
    } else {
      // Yeni bir liste öğesi oluştur
      const li = document.createElement('li');
      li.textContent = taskValue;
  
      // Listeye yeni öğeyi ekle
      const list = document.getElementById('list');
      list.appendChild(li);
  
      // Başarı toast mesajı göster
      showSuccessToast();
  
      // Inputu temizle
      taskInput.value = '';
    }
  }
  
  // Başarı mesajını göster
  function showSuccessToast() {
    const successToast = document.querySelector('.toast.success');
    successToast.classList.remove('hide');
    setTimeout(() => successToast.classList.add('hide'), 4000);
  }
  
  // Hata mesajını göster
  function showErrorToast() {
    const errorToast = document.querySelector('.toast.error');
    errorToast.classList.remove('hide');
    setTimeout(() => errorToast.classList.add('hide'), 4000);
  }
  
(function() {
  // 1. Add Font Awesome CSS to the document head
  const fontAwesomeLink = document.createElement('link');
  fontAwesomeLink.rel = 'stylesheet';
  fontAwesomeLink.href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css';
  document.head.appendChild(fontAwesomeLink);

  // 2. Create the WhatsApp button HTML
  const whatsappButton = document.createElement('a');
  whatsappButton.href = 'https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.';
  whatsappButton.className = 'float';
  whatsappButton.target = '_blank';
  
  const icon = document.createElement('i');
  icon.className = 'fa fa-whatsapp my-float';
  
  whatsappButton.appendChild(icon);
  document.body.appendChild(whatsappButton);

  // 3. Add the CSS styles for the floating button
  const style = document.createElement('style');
  style.textContent = `
    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .my-float {
      margin-top: 16px;
    }
  `;
  document.head.appendChild(style);
})();


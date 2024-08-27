// JavaScript for handling tab switching
document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', () => {
        const tabsContainer = button.parentElement;
        const tabNumber = button.dataset.tab;
  
        // Remove 'active' class from all tab buttons
        tabsContainer.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        
        // Add 'active' class to the clicked button
        button.classList.add('active');
  
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
  
        // Show the selected tab content
        document.getElementById(tabNumber).classList.add('active');
    });
  });
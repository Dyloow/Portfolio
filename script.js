// script.js

// Fonction pour ouvrir un onglet spécifique
function openTab(event, tabName) {
    // Récupérer tous les éléments avec la classe 'tab-content' et les masquer
    var tabContents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContents.length; i++) {
      tabContents[i].style.display = "none";
    }
  
    // Afficher l'onglet sélectionné
    var selectedTab = document.getElementById(tabName);
    selectedTab.style.display = "block";
    
    // Empêcher le comportement par défaut du lien
    event.preventDefault();
  }
  
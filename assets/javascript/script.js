// starts navbar

const openNavbarIcon = document.getElementById("open-menu-icon");
const closeNavbarIcon = document.getElementById("close-menu-icon");
const navbarItems = document.getElementById("navbar-items");

openNavbarIcon.addEventListener("click", openMenu);
closeNavbarIcon.addEventListener("click", closeMenu);
navbarItems.addEventListener("click", closeMenu);

function openMenu() {
  navbarItems.style.transform = "translateX(0)";
}

function closeMenu() {
  navbarItems.style.transform = "translateX(100%)";
}

// ends navbar

// starts create card

const addButton = document.getElementById("add-button");
addButton.addEventListener("click", createNewProperty);

function createNewProperty() {
  const propsContainer = document.querySelector("[data-props]");
  
  const clonedKeyValueElement = propsContainer.children[0].cloneNode(true);
  const keyValuePairs = propsContainer.querySelectorAll("[data-key-value-pair]");

  const newIndex = keyValuePairs.length + 1;
  clonedKeyValueElement.querySelector("[data-key-value-pair-label]").textContent = `Свойство ${newIndex}`;

  // Променете атрибутите на клонирания елемент, за да гарантирате уникалност
  clonedKeyValueElement.id = `key-value-pair-${newIndex}`;

  // Променете атрибутите на input полетата в клонирания елемент, за да гарантирате уникалност
  const clonedInputs = clonedKeyValueElement.querySelectorAll("input");
  clonedInputs.forEach((input) => {
    const currentId = input.id;
    const newId = currentId.replace(/\d+$/, newIndex);
    input.id = newId;
    input.value = ""; // За да нулирате стойността на новите input полета
  });

  propsContainer.appendChild(clonedKeyValueElement);
}

// ends create card
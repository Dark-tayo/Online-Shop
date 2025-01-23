document.addEventListener("DOMContentLoaded", () => {
    // Fetch jerseys from the database
    fetch("php/retrieve-items.php")
        .then(response => response.json())
        .then(items => {
            const itemsContainer = document.getElementById("items-container");
            items.forEach(item => {
                const itemDiv = document.createElement("div");
                itemDiv.innerHTML = `
                    <img src="${item.image_url}" alt="${item.name}">
                    <h3>${item.name}</h3>
                    <p>Price: $${item.price}</p>
                    <p>Jersey ID: ${item.id}</p>
                `;
                itemsContainer.appendChild(itemDiv);
            });
        })
        .catch(error => console.error("Error loading items:", error));
});



let spawnerButton = document.getElementById('noteSpawnerButton');
spawnerButton.addEventListener('click', () => {
    console.log('noteSpawnerButtonClicked');
    spawnerButton.innerHTML = `
        <style>
        .newElementContainer {
            padding: 3px;
        }
        .elementcontainer {
            background-color: yellow;
            margin: auto;
            border-radius: 8px;
            padding: 2px;
            margin: auto;
            max-width: max-content;
            align-content: center;
            align-items: center;
        }
        </style>
    
        <div class="newElementContainer">
        <div class="elementcontainer">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> I have a motorcycle</label><br>
        </div>
        </div>
        `
    document.body.appendChild(spawnerButton);
})

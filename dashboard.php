<div class="dashboard">
    <div class="card card-rectangle-medium">
        <img src="assets/website-cards/card1.png" alt="Card Image">
        <p>Random Text 1</p>
    </div>
    <div class="card card-square-small">
        <img src="assets/website-cards/card2.png" alt="Card Image">
        <p>Random Text 2</p>
    </div>
    <div class="card card-square-small">
        <img src="assets/website-cards/card3.png" alt="Card Image">
        <p>Random Text 3</p>
    </div>
    <div class="card card-square-small">
        <img src="assets/website-cards/card4.png" alt="Card Image">
        <p>Random Text 4</p>
    </div>
    <div class="card card-square-small">
        <img src="assets/website-cards/card5.png" alt="Card Image">
        <p>Random Text 5</p>
    </div>
    <div class="card card-square-large">
        <img src="assets/website-cards/card6.png" alt="Card Image">
        <p>Random Text 6</p>
    </div>
    <div class="card card-rectangle-medium">
        <img src="assets/website-cards/card7.png" alt="Card Image">
        <p>Random Text 7</p>
    </div>
    <div class="card card-square-medium">
        <img src="assets/website-cards/card8.png" alt="Card Image">
        <p>Random Text 8</p>
    </div>
    <div class="card card-square-medium">
        <img src="assets/website-cards/card9.png" alt="Card Image">
        <p>Random Text 9</p>
    </div>
    <div class="card card-rectangle-medium">
        <img src="assets/website-cards/card10.png" alt="Card Image">
        <p>Random Text 10</p>
    </div>
</div>

<style>
.dashboard {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: auto;
    gap: 20px;
    padding: 20px;
}

.card {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
}

.card img {
    width: 100%;
    height: auto;
    display: block;
}

.card p {
    padding: 10px;
    margin: 0;
}

/* Variasi bentuk kartu */
.card-rectangle-medium {
    grid-column: span 2;
    height: 200px; /* Adjust as needed */
}

.card-square-small {
    width: 300px; /* Adjust as needed */
    height: 200px; /* Adjust as needed */
}

.card-square-large {
    grid-column: span 2;
    height: 400px; /* Adjust as needed */
    margin-top: -220px; /* Adjust as needed to move up */
}

.card-square-medium {
    width: 100%;
    height: 200px; /* Adjust as needed */
}

/* Posisi kartu */
.card:nth-child(1) {
    grid-column: 1 / 3;
}

.card:nth-child(2) {
    grid-column: 3;
    grid-row: 1;
}

.card:nth-child(3) {
    grid-column: 4;
    grid-row: 1;
    margin-left: 10px; /* Adjust as needed to reduce gap */
}

.card:nth-child(4) {
    grid-column: 3;
    grid-row: 2;
}

.card:nth-child(5) {
    grid-column: 4;
    grid-row: 2;
    margin-left: 10px; /* Adjust as needed to reduce gap */
}

.card:nth-child(6) {
    grid-column: 1 / 3;
    grid-row: 3;
    margin-top: -220px; /* Adjust as needed to move up */
}

.card:nth-child(7) {
    grid-column: 3;
    grid-row: 3;
}

.card:nth-child(8),
.card:nth-child(9) {
    grid-column: 1 / 2;
    grid-row: 4;
}

.card:nth-child(10) {
    grid-column: 3;
    grid-row: 4;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .dashboard {
        grid-template-columns: 1fr;
    }

    .card-rectangle-medium {
        grid-column: span 1;
        height: 150px; /* Adjust as needed */
        margin-bottom: 20px; /* Add margin to separate card 1 and 6 */
    }

    .card-square-large {
        grid-column: span 1;
        height: 200px; /* Adjust as needed */
        margin-top: 20px; /* Add margin to separate card 1 and 6 */
    }

    .card-square-small {
        width: 100px; /* Adjust as needed */
        height: 100px; /* Adjust as needed */
    }
}
</style>
</style>
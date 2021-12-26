<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercise for Web Application and Technologies</title>
</head>
<body>
    <div id="main-container">
        <div class="tile-2 image">
            <div><span>W</span>eb <span>A</span>pplication <span>T</span>echnology</div>
        </div>

        <div class="tile red">
            <h2 class="title">Links</h2>
            <ul class="list">
                <li><a href="#">Chubkins</a></li>
                <li><a href="https://www.w3schools.com">w3Schools</a></li>
                <li><a href="https://developer.mozilla.org/en-US/docs/Learn">Learn Web Dev</a></li>
                <li><a href="https://www.w3schools.com/colors/colors_names.asp">Color Reference</a></li>
            </ul>
        </div>

        <div class="tile orange">
            <div>WAT Lecture</div>
            <div>12:00 - 13:00 LTB</div>
            <div>Every <span>WED</span> </div>
        </div>

        <div class="tile-2 blue">
            <h2 id="table-title">WAT Assessment</h2>
            <table id="assessment-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Weight</th>
                        <th>Due</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Work in progress</td>
                        <td>20%</td>
                        <td>See VLE</td>
                    </tr>
                    <tr>
                        <td>Portfolio</td>
                        <td>50%</td>
                        <td>See VLE</td>
                    </tr>
                    <tr>
                        <td>Phase Exam</td>
                        <td>30%</td>
                        <td>See VLE</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="tile-2 white">
            <h2 class="title">Search for Property</h2>
            <form>
                <label>Location:</label> 
                <input type="text" name="location" placeholder="e.g this or that"/><br/>

                <label>Category:</label>
                <select name="category">
                    <option value="Flat" selected>Flat</option>
                    <option value="Only-One">Only one</option>
                    <option value="Apartment">Apartment</option>
                </select>

                <label>Beds:</label>
                <input type="number" value="4" min="1" max="99"/><br/>

                <input type="radio" name="choice" value="Price" checked/>
                <label>Price</label>
                <input type="radio" name="choice" value="Beds"/>
                <label>Beds</label>
                <input type="radio" name="choice" value="Alpha"/>
                <label>Alpha</label><br/>

                <input type="button" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>

<?php 
    //login, register handler
    require '../app/controllers/reservation/reserve.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="../app/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <center><br><h2 class="display-1 center p-4">Schedule</h2><hr class="w-75"></center>
    <div class="container p-5 d-flex justify-content-center">
        <div class="calendar bg-light text-dark">
            <div class="month text-white">
                <i class="fas fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days"></div>
        </div>    
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3 mb-2 bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Reservation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modalform"action="calendar.php" method="POST">
        <div class="input-group mb-3" id="modaldate">

        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="timeswimming" aria-label="Default select example" placeholder="aaa">
                <option disabled selected hidden>Day Swimming</option>
                <option value="1">Day Swimming</option>
                <option value="2">Night Swimming</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="cottagenum" aria-label="Default select example">
                <option disabled selected hidden>Cottage No.</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="adultnum" aria-label="Default select example">
                <option disabled selected hidden>Number of Adults</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <select class="form-select w-100 p-2" name="childrennum" aria-label="Default select example">
                <option disabled selected hidden>Number of Children</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
            </select>
        </div>
            <input type="submit" name="reservebutton" class="btn-primary btn w-100" value="Reserve">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3 mb-2 bg-dark text-white">
        <h5 class="modal-title" id="headerModal"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">
        <?php
            $sql = "SELECT * FROM reservation";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <div class="row">
                <div class="col">
                    <?php echo $row['id']?>
                </div>
            </div>
        <?php 
                }
            }
        ?>
        <br>
        <button type="button" id="toReservation" class="button-18 w-100 h-100" onclick="inputDate()">Add Reservation</button>
      </div>
    </div>
  </div>
</div>

    <script>
    const date = new Date();

    const renderCalendar = () => {
    date.setDate(1);

    const monthDays = document.querySelector(".days");

    const lastDay = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDate();

    const prevLastDay = new Date(
        date.getFullYear(),
        date.getMonth(),
        0
    ).getDate();

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDay();

    const nextDays = 7 - lastDayIndex - 1;

    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    document.querySelector(".date h1").innerHTML = months[date.getMonth()];

    document.querySelector(".date p").innerHTML = new Date().toDateString();

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        const j = new Date(date.getFullYear(), date.getMonth(), i);
        if (
        i === new Date().getDate() &&
        date.getMonth() === new Date().getMonth()
        ) {
        days += `<div class="today" onclick="setDate('${j.toDateString()}'); showReservations('${j}')">${i}</div>`;
        } else {
        days += `<div id="${date.getMonth() + 1 + "-" + i}" onclick="setDate('${j.toDateString()}'); openModalReservations(${(date.getMonth() + 1)})">${i}</div>`;
        }
    }

    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
        monthDays.innerHTML = days;
    }
    };

    document.querySelector(".prev").addEventListener("click", () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
    });

    document.querySelector(".next").addEventListener("click", () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
    });

    function setDate(j) {
        var arr1 = j.split(' ');
        monthindex = arr1[1].toLowerCase();
        var months = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
        monthindex = months.indexOf(monthindex);
        console.log('day: ', arr1[0]);
        console.log('month: ', monthindex + 1);
        console.log('date: ', arr1[2]);
        console.log('year: ', arr1[3]);
        this.wholedate = j;
        this.chosendate = arr1[2];
        this.chosenmonth = "0" + (monthindex + 1);
        this.chosenyear = arr1[3];
    }
    
    function getDateChosen() {
        return this.chosendate
    }
    function getMonthChosen() {
        return this.chosenmonth
    }
    function getYearChosen() {
        return this.chosenyear
    }

    function getWholeDate() {
        return this.wholedate
    }

    function getFullDate() {
        var today = new Date();
        today =  getYearChosen() + '-' + getMonthChosen() + '-' + getDateChosen();
        return today
    }

    function openModalReservations(i) {
        datemodal = document.getElementById('headerModal');
        datemodal.innerHTML = "<h3s>Reservations for " + getWholeDate() + "</h3>";
        $('#reservationModal').modal('show');
    }

    renderCalendar();
    </script>


</html>
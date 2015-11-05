# Smokertron9000

### Falling Cabinets ![fcapps](https://github.com/Rob-MFn-Fletcher/fcapps/blob/master/medium.jpg)
---

This will be a BBQ/Smoker controller that will monitor and adjust the temperature automatically.

---
###Hardware
For the controller unit I will use an Arduino. This will monitor the temp and
control small fans and/or servos to open and close the vents. I would like to
several temperature sensors in several places in the smoker.

####Details to work out:
- Connection
   + Most likely wifi. Need to investigate more on wifi for Arduino. Can test
   ethernet cable easily enough.


###Software
I plan on using [HighCharts](http://www.highcharts.com) to display the information
streaming from the Arduino. This can display all temp information, and info about
the state of vents/fans. This will allow tuning of the software for the ultimate
in BBQ'ed meats.

Can use POST to send info from arduino to web server. It can be read with PHP or
Javascript I think. Maybe look into putting this information into a database.

I have played around a bit with using a MySQL database to store and read information
to the website. The PHP scripts in here are modified examples I found that I got 
working. I dont necessarily like the idea of having to have a full database server
installed. I would like it to be more standalone than that.

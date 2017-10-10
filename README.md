# packnet-test

## The workflow

* Hello, here follows my test task for Packnet. The code will never intend to bee 100% working, 
will only show the structure of the project I'd done.

* It will be symfony project run by CLI command `bin/console server:run` and accessed by http://127.0.0.1:8000/

* I'm making all DB fields nullable to make my work easier now. 
In the real life I would never make such fields like album title, artist, etc nullable.

* I've been distracted for 5 mins

* I've chosen doctrine ORM approach to same some time on writing real queries, 
because PPHStorm can autocomplete Doctrine classes and methods. 
Trust me I know how to write these queries in SQL.
Generally I prefer plain SQL to ORMs, but it depends on project andor company of course.


* OK at the point I've done fixtures for albums and gendres I've ran out of my 90 min. 
I'm not sure fixtures work as I don't want to waste my time on chasing the bugs. 
Hash for the las comint 'in time' is 4d80da95ee0772bde83f2014604ad6d1e0484992

* Following work will go over my time, I just wanted to show the idea the code

* Unfortunately I had no time to start testing, as Doctrine repository is not mockable (and it *must not* be mocked)
so only integration tests can be written for it. But I love tests. I do. 
All of them - unit tests, integration tests, functional tests, acceptance tests.
And I try to work in TDD (red-green-red) principles.

* At this poit I found out that I forgot to add price field to album entity/table
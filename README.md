# symfony5
OAT for check

the Main Idea is creating two services (autowired and this way avoiding
the injection in the contructor) one capable to reading csv files and 
another one for reaing json files, this code could be callable from every 
part of my symfony code and when they are implemented they must recieve 
as a parameter the file wich must be readed, the csv or json one.
The response must be an Object wich is exposed as an api.



TODO things

at model class level
complete reading JSON class for charging the JSON file and
writing all the information in Entities/objects which could
be passed to the controller. 

complete reading CSV class for charging the CSV file and
writing all the information in Entities/objects which could
be passed to the controller.

at controller level

completing the request for csv function and JSON and putting 
the answered data inside the final response to the client.

FYI






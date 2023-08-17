 Database: poll_voting_system
 Table: polls 
   
   #	Name	Type	Collation	Attributes	Null	Default	Comments	extra
	1	id Primary	int(11)					AUTO_INCREMENT		
	2	title	varchar(255)	utf8mb4_general_ci		Yes	NULL				
	3	description	text	utf8mb4_general_ci		Yes	NULL			
	4	createdAt	timestamp			No	current_timestamp()		



Table: user

  #	Name	        Type	Collation	Attributes	Null	Default	Comments	
	1	id Primary	int(11)			No	None		AUTO_INCREMENT		
	2	fname	varchar(255)		Yes	NULL				
	3	lname	varchar(255)		Yes	NULL				
	4	email	varchar(255)		Yes	NULL				
	5	password	varchar(255)		Yes	NULL				
	6	createdAt	timestamp			No	current_timestamp()	


Table: vote_count

  #	Name	Type	Collation	Attributes	Null	Default	Comments	
	1	id Primary	int(11)			No	None		AUTO_INCREMENT		
	2	poll_id	int(11)			No	None				
	3	option	varchar(255)	utf8mb4_general_ci		Yes	NULL				
	4	count	int(11)			Yes	0

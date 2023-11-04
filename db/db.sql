create table admin(
	admin_id varchar(20) primary key,
	admin_pwd varchar(20) not null,
	admin_name varchar(30) not null
);

insert into admin values('admin','admin','admin');

create table plans(
	plan_id int auto_increment primary key,
	plan_name varchar(100) not null,
	speed varchar(50) not null,
	data varchar(100) not null,
	duration varchar(50) not null,
	cost float not null
);

insert into plans (plan_name, speed, data, duration, cost) VALUES
('HOME_WiFi/GHAR_KA_WiFi_RURAL','Upto 30 Mbps till 1000 GB', 'Unlimited Data Download', '1 Month', 399),
('Fibre Basic','Upto 40 Mbps till 3300 GB', 'Unlimited Data Download', '1 Month', 499),
('Fibre Rural HOME WiFi / GHAR KA WiFi','Upto 30 Mbps till 1000 GB', 'Unlimited Data Download', '6 Month', 1999),
('BSNL FIBRE_VALUE_OTT','Upto 100 Mbps till 1000 GB', 'Unlimited Data Download', '1 Month', 799),
('Fibre Premium','Upto 200 Mbps till 3300 GB', 'Unlimited Data Download', '12 Month', 17988),
('Fibre Basic ','Upto 60 Mbps till 3300 GB', 'Unlimited Data Download', '6 Month', 3663),
('Fibre Silver OTT','Upto 300 Mbps till 4500 GB', 'Unlimited Data Download', '1 Month', 2299),
('Fiber 1000GB CS330 - Bundled WiFi ONT','60 Mbps till 1000 GB', 'Unlimited Data Download', '6 Month', 4794),
('Fibre Premium','Upto 200 Mbps till 3300 GB', 'Unlimited Data Download', '6 Month', 8245),
('Fibre Ultra','Upto 300 Mbps till 4000 GB', 'Unlimited Data Download', '24 Month', 43176);

create table customer(
	c_id int auto_increment primary key,
	c_email varchar(100) not null,
	c_pwd varchar(100) not null,
	c_name varchar(100) not null,
	c_addr varchar(100) not null,
	c_phone varchar(10) not null,
	c_aadhar varchar(12) not null
);

create table employee(
	emp_id int auto_increment primary key,
	emp_name varchar(100) not null,
	emp_pwd varchar(100) not null,
	emp_addr varchar(100) not null,
	emp_phone varchar(10) not null,
	emp_join_date date not null
);

insert into employee(emp_name, emp_pwd, emp_addr, emp_phone, emp_join_date) values
('Ram Yadav','7866','Akurdi Pune 35','9823374977','2020-03-01'),
('Rahul Gandhi','7166','Akurdi Pune 35','8823374977','2020-04-01'),
('Sachin Pilot','7966','Chinchwad Pune 33','7823374977','2021-03-01'),
('Eknath Khadse','7766','Chinchwad Pune 33','9829974977','2022-03-01'),
('Dhananjay Mundhe','7832','Bhosari Pune 19','8883374977','2020-05-01'),
('Ajit Pawar','7811','Pimpri Pune 17','9823371977','2021-06-01');

create table bill(
	bill_id int auto_increment primary key,
	bill_date date not null,
	c_id int not null,
	emp_id int default 0,
	plan_id int not null,
	card_holder varchar(100) not null,
	card_number varchar(16) not null,
	status varchar(20) default 'Pending'
);

create table complaints(
	comp_id int auto_increment primary key,
	comp_date date not null,
	bill_id int not null,
	comp_text varchar(255) not null,
	status varchar(20) default 'Pending'
);

create table question(
	id int auto_increment primary key,
	question varchar(200) not null,
	answer varchar(500) not null
);

insert into question(question, answer) values
('How long does it take for new broadband connection to become active?', 'Within 48 hours new broadband connection becomes active.'),
('How much to pay for the broadband router?', 'It will be provided free of cost irrespective of any GoWireless broadband plan you may choose.'),
('Should I choose broadband Internet or stick to dongle?', 'Broadband Internet will give you a better overall experience than a dongle. Dongles are normally portable Internet connections that you plug directly into your laptop or desktop computer. Meanwhile, broadband Internet connections are provided for multiple devices and are laid out over copper or fiber optic cables. I suggest you take up GoWireless broadband for your home, because you will get a really good deal on the plan.'),
('Will I get the maximum broadband speed promised in the plan?', 'The speed of internet shall vary as per your exact location. It will be confirmed before installation process.'),
('Will I receive landline/telephone/handset/receiver with the broadband router?', 'While you shall receive unlimited Local and STD calls, the landline/telephone/handset/receiver instrument will not be provided from our end. For LCO cities, same rules apply basis approvals from BSNL authorities.'), 
('How is broadband different from WiFi?', 'Wifi is a technology that uses a router to create a Wireless Local Area Network (WLAN) to connect devices such as computers, tablets and smartphones with one another. This technology uses radio waves and does not require an Internet connection. Broadband is the technology that connects a home computer or network to the Internet using cables, satellite or mobile connection.'),
('Why is GoWireless broadband best for home?', 'The GoWireless Broadband employs the most modern broadband technology called GoWireless Xstream Fiber with the fiber optic connectivity with speed up to 1 Gbps. The GoWireless broadband connections also come with their own free router, unlimited STD and local calls and unlocks rewards such as subscription to GoWireless Xstream app and Amazon Prime.'),
('Do you need broadband to have WiFi?', 'You can have a wifi network without the broadband, however without the internet connectivity the wifi will have some very limited features. You can use it to interact with other devices at home and use it for things like offline file transfer, streaming media to other devices, and controlling your computer remotely.'),
('Does broadband Internet need a phone line?', 'The broadband connection does not require a phone line however some broadband connections come with a phone connection. You can use the phone for making calls and use the broadband for internet connectivity at the same time, which was not the case with the earlier dial up connections.'),
('Which is better WiFi or Broadband?', 'While both wifi and broadband have their own benefits, the broadband is a better choice for majority of the users since it provides faster speeds. The broadband connection is also less susceptible to being hacked since it is more secure.'),
('How to check GoWireless broadband usage?', 'You can check the GoWireless Broadband usage through the GoWireless Thanks app. Once you have logged into your account using the registered mobile number and DTH, you will get the various accounts including the Fixed Line Broadband. Your usage of broadband will be displayed there as well as your outstanding bills.'),
('How can I get GoWireless broadband connection?', 'You can buy the GoWireless Broadband connection in just three easy steps. First you need to open the GoWireless broadband page on your computer or smart device, choose your city and the broadband plan that you wish to opt for. You will be directed to a different page where you need to provide your details and you will receive a call from the installation team regarding your convenient installation time and location.'),
('Is GoWireless broadband Wireless?', 'All the GoWireless Broadband connections come with the free wifi router and therefore the customers can use it wirelessly.'),
('How to change my existing GoWireless broadband plan?', 'You can log into the GoWireless Thanks app and choose the Fixed Line Broadband account. There you will be provided the option to manage your connection and taken to the page where you can change your plan.'),
('How is GoWireless Xstream Fiber better than the regular broadband connection?', 'The GoWireless Xstream Fiber promises higher speed and more stable connection due to the Fiber Optic technology used by GoWireless in comparison to the traditional cables. The router is also better with Gigabit ports to accommodate the GoWireless internet speeds that go up to 1 Gbps.');

create table chats(
	id int auto_increment primary key,
	user varchar(100) not null,
	chatbot varchar(500) not null,
	date date);

create table feedback(
	id int auto_increment primary key,
	name varchar(100) not null,
	phone varchar(10) not null,
	email varchar(50) not null,
	message varchar(500) not null,
	feedback_date date not null);
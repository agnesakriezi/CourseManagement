#  Software Engineering Project

###  Introduction
The project is a web-based system for managing PhD programs. The system has three types of actors: Students, Mentors, and Administrative Persons (AP). The system allows students to register themselves or be added by an AP, and view a list of available mentors for their study program. Mentors can send a Draft Proposal to the Faculty Admin, upload the student's First Presentation, and decide on the approval of the doctoral thesis topic and upload the related documents. The AP can add, update, or view Mentors, Students, or Student Progress, and can add Accredited Mentors, create Academic Titles, and add Accredited Study Programs. The system is designed to be user-friendly, secure, reliable, scalable, and maintainable. The project involves a number of functional and non-functional requirements that need to be met to ensure the system meets the needs of its users.

### Milestones & Deliverables

##### Milestone 1: Planning Tasks:
    -Define the scope of the project 
    -Create use case diagram
    -Create class diagram 
    -Assign team roles and responsibilities 
    -Define timelines 

##### Deliverables:
    -Use case diagram 
    -Class diagram 
    -Project scope document 
    -Team roles  
    -Project timeline  
    Timeline: 1 week

##### Milestone 2: System Design Tasks:
    -Design the database schema 
    -Select the programming languages and technologies 
    -Define the system development environment and tools 

##### Deliverables:
    -Database schema document 
    -Selected programming languages and technologies document 
    -System development environment and tools document 
    Timeline: 2 weeks

##### Milestone 3: System Development Tasks:
    -Develop the Student, Mentor, Administrative Person (AP), Faculty Admin, Study Program, Draft  Proposal, and First     Presentation classes 
    -Implement the user interface according to the wireframes 
    -Develop the necessary functions and features of the system 

##### Deliverables:
    -Developed Student, Mentor, Administrative Person (AP), Faculty Admin, Study Program, Draft Proposal, and First Presentation classes
    -Implemented user interface 
    -System functions and features document 
    Timeline: 4 weeks

##### Milestone 4: Testing Tasks:
    -Develop and perform unit testing for each class 
    -Identify and resolve defects 

##### Deliverables:
    -Unit testing document  
    -Defects log 
    Timeline: 3 weeks






###  Classes
##### Student Class:
    -Registers a student into the system with required information 
    -Allows students to view their information (name, ID, academic year, faculty, study program) and a list of available mentors for their study program 
    -Provides authentication for students to login and access their information 
##### Mentor Class:
    -Sends Draft Proposal to Faculty Admin for approval 
    -Uploads the student's First Presentation
    -Approves the doctoral thesis topic and uploads the related documents 
    -Provides authentication for mentors to login and view their list of students 
##### Administrative Person (AP) Class:
    -Adds students to the system and assigns an accredited mentor 
    -Updates student progress and status 
    -Adds and manages Accredited Mentors, Academic Titles, and Accredited Study Programs 
    -Searches and views a list of all students in the system 
    -Provides authentication for AP to login and access the PhD Program Screen 
##### Faculty Admin Class:
    -Adds and manages Accredited Study Programs 
    -Approves or disapproves the Draft Proposal sent by mentors 
    -Uploads the approved Draft Proposal and doctoral thesis topic related documents 
    -Provides authentication for Faculty Admin to login and perform their actions 
##### Study Program Class:
    -Stores information related to an accredited study program (name, type, duration, courses, etc.) 
    -Allows AP to add new study programs or update existing ones 
    -Provides data for other classes to use when needed 



###  Use Case Diagram
    -The system has 4 types of actors: Student, mentor, and Administrative Person (AP), Faculty Admin. 
    -The student can register themselves or an AP can add a student to the system.
    -During registration, certain fields will only be visible to the AP.
    -The AP must login through the Login Form before they can access the PhD Program Screen, where they  can select to add, update, or view Mentors, Students, or Student Progress.
    -The List All Students Form allows the AP to search for a student by ID and add a new student.
    -The AP can also add Accredited Mentors, create Academic Titles, and add Accredited Study Programs.
    -A student can login and view a list of available mentors for their study program.
    -The mentor can send a Draft Proposal to the Faculty Admin, who can approve and upload it to the system.
    -The mentor can also upload the student's First Presentation, which will notify the Coordinator of the PhD program.
    -The mentor can then decide on the approval of the doctoral thesis topic and upload the documents.


![](useCase.png)
Link:https://lucid.app/lucidchart/c8c293df-8f64-49c0-aa52-49292f2d2c71/edit?page=0_0&invitationId=inv_43fc8309-13d9-4c32-a199-820ba2ccb40a#

###  Class Diagram
The main actors in the system are the Student and the Administrative Person (AP). The system allows for two main use cases: student registration and administrative actions.<br>
##### Student registration:
    -The student can initiate the registration process by clicking "I am a student" in the login form.
    -The student fills out the registration form, with certain fields remaining hidden until an accredited mentor is assigned.
##### Administrative actions:
    -AP login through the "Login Form"
    -AP navigated to the PhD Program Screen
    -AP can select to perform actions on Mentors, Students or Student Progress.
    -AP can view and search a list of all students
    -AP can add a new student by navigating to the "Student Registration Form"
    -AP can add accredited mentors by navigating to the "List All Mentors" screen and clicking the "Add Mentor" button.
    -AP can create academic titles by navigating to the "Create Academic Title" form.
    -AP can add a study program by navigating to the "List of Accredited Programs" screen and selecting "Add Accredited Study Program"
##### Student specific actions:
    -A student can see list of available mentors and contact them via email
    -A student can see their information like name, ID, academic year, faculty, study program and list of available mentors for him/her corresponding study program.
##### Mentor specific actions:
    -A mentor can send the “Draft Proposal” to the Faculty Admin
    -A mentor can upload the First Presentation of the student
    -A mentor logs in, and he can see list of students that they have. Once he has selected the student. 
##### Faculty Admin specific actions:
    -Add study programs 
    -Upload the document in the system 

![](ClassDiagram.png)
 Link:https://lucid.app/lucidchart/84120e1d-965e-4b6f-a3dd-73a6b0916bb4/edit?beaconFlowId=F9510C83A214A452&invitationId=inv_c7d53902-423e-45bd-9761-d921b5f7a624&page=0_0


### Unit Testing

  ##### Student Registration Testing


    public function testStudentRegistration()
    {
    
    $data = [
        'name'=> 'Jessica',
        'LastName'=>'Joan',
        'studentId'=>'08229211',
        'faculty'=>'CST',
        'Programme'=>'Computer Science',
        'Academic_Year'=>'20/21',
        'email'=>'jessica@hotmail.com',
        'phone'=>'+38928457198',
        'status'=>'Active',
    ];

    $response = $this->json('POST', '/applicants', $data);

    $response->assertRedirect('/applicants');

    $this->assertDatabaseHas('applicants', [
        'name'=> 'Jessica',
        'LastName'=>'Joan',
        'studentId'=>'08229211',
        'faculty'=>'CST',
        'Programme'=>'Computer Science',
        'Academic_Year'=>'20/21',
        'email'=>'jessica@hotmail.com',
        'phone'=>'+38928457198',
        'status'=>'Active',
    ]);
}

 ##### Student Update Testing


    public function a_student_can_be_updated()
    { 
        
        $applicant = new Applicant();
        $student = $applicant->create();

        $data = [
            'name'=> 'Jessica',
            'LastName'=>'Jooan',
            'studentId'=>'092221',
        ];

        $response = $this->json('PUT', '/applicants/{applicant}'.$student->id, $data);

        $response->assertStatus(200)
                 ->assertJson([
                    'status' => 'success',
                    'message' => 'Student successfully updated.'
                 ]);

        $this->assertDatabaseHas('students', [
            'id' => $student->id,
            'name'=> 'Jessica',
            'LastName'=>'Jooan',
            'studentId'=>'092221',
        ]);
    }

 ##### Student Delete testing


    public function a_student_can_be_deleted()
    { 
        
        $applicant = new Applicant();
        $student = $applicant->create();

        $response = $this->delete('/applicants/{applicant}'.$student->studentId);

        $response->assertStatus(204);

        $this->assertDatabaseMissing('students', [
            'studentId' => $student->studentId,
        ]);
    }


  ![](testCases.png)

### Installation
To install and use this application, follow these steps:

1 -Clone this repository to your local machine :
git clone https://github.com/ElviraMemeti/WebProgrammingProject.git

2 -Set up the database by creating a new MySQL database, and update the .env file with your database credentials : 
.env.example .env
php artisan migrate

4 -Start the server : 
php artisan serve

### Usage
To use this application, simply navigate to the homepage and start adding, editing, or deleting student information. You can also search for students using the search bar, and sort students by faculty.

### Contributing
If you would like to contribute to this project, please follow these guidelines:

1 -Fork this repository and clone it to your local machine.
2 -Create a new branch for your changes.
3 -Make your changes and commit them with descriptive commit messages.
4 -Push your changes to your forked repository.
5 -Create a pull request to merge your changes into the main branch.


### Conclusion
We hope that this Student Management System me will be useful for you. If you have any questions or comments, please feel free to reach out to us. Thank you for using our app!

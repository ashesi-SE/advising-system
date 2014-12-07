function student_class(id, fname, mname, lname, username, major) {
   // member variablies
   this.student_id = id;
   this.first_name = fname;
   this.middle_name = mname;
   this.last_name = lname;
   this.major = major;
   this.username = username;

   // methods
   this.getUsername = function getUsername() {
      return this.username;
   };

   this.setUsername = function setUsername(name) {
      this.username = name;
   };


   this.getName = function getName() {
      return this.first_name + " " + this.middle_name + " " + this.last_name;
   };

   this.setName = function setName(f, m, l) {
      this.first_name = f;
      this.middle_name = m;
      this.last_name = l;
   };

   this.getMajor = function getMajor() {
      return this.major;
   };

   this.setMajor = function setMajor(dept) {
      this.major = dept;
   };

   this.setId = function setId(id) {
      this.student_id = id;
   };

   this.getId = function getId() {
      return this.student_id;
   };
}
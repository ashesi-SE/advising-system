function faculty_class(id, fname, mname, lname, username, dept) {
   // member variablies
   this.faculty_id = id;
   this.first_name = fname;
   this.middle_name = mname;
   this.last_name = lname;
   this.username = username;
   this.department = dept;



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

   this.getDept = function getDept() {
      return this.department;
   };

   this.setDept = function setDept(dept) {
      this.department = dept;
   };

   this.setId = function setId(id) {
      this.faculty_id = id;
   };

   this.getId = function getId() {
      return this.faculty_id;
   };
}
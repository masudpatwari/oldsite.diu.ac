
        /*

        Department of Business Administration
        Department of Civil Engineering
        Department of Law
        Department of CSE
        Department of English
        Department of EETE
        Department of Sociology
        Department of Pharmacy

        */

        function getDepartmentsWiseTeachers(teachers) {
           var url = window.location.href;
             //var url = 'http://diu.ac/department-of-law/';
            var department = url.split('/')[3];
            //console.log(department);

            var departmentWiseTeachers = [];
            switch (department) {
                case 'department-of-business-administration':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'Business Administration'
                    });
                    break;

                case 'department-of-civil':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'Civil'
                    });
                    break;
				
				case 'department-of-law':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'Law'
                    });
                    break;
					
				case 'department-of-cse':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'Computer Science And Engineering'
                    });
                    break;
				case 'department-of-english':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'English'
                    });
                    break;	
				
				case 'department-of-eete':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'Electrical, Electronics & Telecommunication Engineering'
                    });
                    break;
					
				case 'department-of-sociology':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'Sociology'
                    });
                    break;
					
				case 'department-of-pharmacy':
                    departmentWiseTeachers = _.filter(teachers, (teacherItem) => {
                        return teacherItem.department === 'Pharmacy'
                    });
                    break;	
					

                default:
                    departmentWiseTeachers = [];
                    break;
            }
            return departmentWiseTeachers;
        }

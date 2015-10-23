module.exports = function(grunt) {
  //load our plugins that were installed via NPM
  grunt.loadNpmTasks("grunt-contrib-less");
  grunt.loadNpmTasks("grunt-contrib-watch");

  //set our options
  grunt.initConfig({
    less: {
      dev: {
        //compile from style.less to style.css
        src: "style.less",
        dest: "style.css"
      }
    },
    watch: {
      options: {
        livereload: true
      },
      //when .less files change, run the LESS task and livereload
      less: {
        files: ["**/*.less"],
        tasks: ["less"]
      }
    }
  });

  //default task: compile LESS and start the file watch
  grunt.registerTask("default", ["less", "watch"]);

}

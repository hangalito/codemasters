package com.masters.code;

import com.masters.code.data.FocusArea;
import com.masters.code.data.Sex;
import com.masters.code.domain.customer.Student;
import com.masters.code.service.StudentService;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.context.annotation.Bean;
import org.springframework.security.crypto.password.PasswordEncoder;

import java.time.LocalDate;
import java.time.Month;

@org.springframework.boot.autoconfigure.SpringBootApplication
public class Application {

    public static void main(String[] args) {
        SpringApplication.run(Application.class, args);
    }

    @Bean
    CommandLineRunner commandLineRunner(StudentService service, PasswordEncoder encoder) {
        return args -> {
            Student student = new Student();
            student.setName("Bartolomeu");
            student.setSurname("Hangalo");
            student.setBirthdate(LocalDate.of(2004, Month.NOVEMBER, 10));
            student.setEmail("bartolomeuhangalo@gmail.com");
            student.setPassword(encoder.encode("codemasters"));
            student.setSex(Sex.MALE);
            student.setFocus(FocusArea.PROGRAMMING);
            System.out.println(service.save(student));
        };
    }

}

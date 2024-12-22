package com.masters.code;

import com.masters.code.data.Sex;
import com.masters.code.domain.customer.Customer;
import com.masters.code.domain.customer.CustomerDto;
import com.masters.code.service.CustomerService;
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
    CommandLineRunner commandLineRunner(CustomerService service, PasswordEncoder encoder) {
        return args -> {
            Customer customer = new Customer("Bartolomeu", "Hangalo");
            customer.setBirthdate(LocalDate.of(2004, Month.NOVEMBER, 10));
            customer.setEmail("bartolomeuhangalo@gmail.com");
            customer.setPassword(encoder.encode("codemasters"));
            customer.setSex(Sex.MALE);
            CustomerDto customerDto = service.save(customer);
            System.out.println(customerDto);
        };
    }

}

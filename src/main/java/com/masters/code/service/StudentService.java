package com.masters.code.service;

import com.masters.code.domain.customer.Student;
import com.masters.code.domain.customer.StudentRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Service
@RequiredArgsConstructor
public class StudentService {

    private final StudentRepository repo;

    public Optional<Student> findByUsername(String username) {
        return repo.findByEmail(username);
    }

    public Student save(Student student) {
        return repo.save(student);
    }
}

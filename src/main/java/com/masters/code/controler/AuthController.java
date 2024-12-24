package com.masters.code.controler;

import com.masters.code.data.FocusArea;
import com.masters.code.data.Sex;
import com.masters.code.domain.customer.Student;
import com.masters.code.service.StudentService;
import jakarta.validation.Valid;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.Errors;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.List;

@Controller
@RequestMapping(path = "/auth")
public class AuthController {

    private final StudentService studentService;

    public AuthController(StudentService studentService) {
        this.studentService = studentService;
    }

    @ModelAttribute
    public void modelAttributes(Model model) {
        model.addAttribute("genders", List.of(Sex.MALE, Sex.FEMALE));
        model.addAttribute("areas", List.of(FocusArea.PROGRAMMING, FocusArea.NETWORKING));
    }

    @GetMapping(path = "/login")
    public String login(Model model) {
        model.addAttribute("msg", "Credenciais inválidas");
        return "login";
    }

    @GetMapping(path = "/register")
    public String register(Model model) {
        model.addAttribute("student", new Student());
        return "register";
    }

    @PostMapping(path = "/register")
    public String register(@Valid Student student, Errors errors, Model model) {
        if (errors.hasErrors()) {
            model.addAttribute("student", student);
            return "register";
        }
        studentService.save(student);
        return "redirect:/dashboard";
    }
}

package com.masters.code.controler;

import com.masters.code.domain.customer.Student;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;

import java.security.Principal;

@Controller
@RequestMapping(path = "/dashboard")
public class DashboardController {
    @ModelAttribute
    public void modelAttribute(Model model, Principal principal) {
        Student student = ((Student) ((UsernamePasswordAuthenticationToken) principal).getPrincipal());
        model.addAttribute(student);
    }

    @GetMapping
    public String dashboard() {
        return "dashboard";
    }
}

package com.masters.code.controler;

import com.masters.code.domain.customer.Student;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.security.Principal;

@Controller
public class PublicController {
    private static void setPrincipal(Principal principal, Model model) {
        if (principal != null) {
            Student student = ((Student) ((UsernamePasswordAuthenticationToken) principal).getPrincipal());
            model.addAttribute("pr", student);
        }
    }

    @GetMapping
    public String home(Principal principal, Model model) {
        setPrincipal(principal, model);
        return "index";
    }

    @GetMapping(path = "/nosso-metodo")
    public String method(Principal principal, Model model) {
        setPrincipal(principal, model);
        return "metodo";
    }
}

package com.masters.code.controler;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.security.Principal;

@Controller
public class HomeController {
    @GetMapping
    public String home(Principal principal, Model model) {
        model.addAttribute("pr", principal);
        return "index";
    }
}
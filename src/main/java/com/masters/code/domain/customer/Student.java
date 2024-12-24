package com.masters.code.domain.customer;

import com.masters.code.data.FocusArea;
import com.masters.code.data.Sex;
import jakarta.persistence.*;
import jakarta.validation.constraints.Email;
import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Size;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;
import lombok.ToString;
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;

import java.io.Serial;
import java.io.Serializable;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.util.Collection;
import java.util.List;
import java.util.Objects;

import static jakarta.persistence.TemporalType.DATE;
import static jakarta.persistence.TemporalType.TIMESTAMP;

@Getter
@Setter
@ToString
@NoArgsConstructor
@Entity
@Table(name = "cliente")
public class Student implements Serializable, Comparable<Student>, UserDetails {
    @Serial
    private static final long serialVersionUID = 2L;

    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Integer id;

    @NotBlank(message = "O name é obrigatório")
    @Size(max = 45, message = "O nome deve ser inferior a 45")
    private String name;

    @NotBlank(message = "O surname é obrigatório")
    @Size(max = 45, message = "O sobrenome deve ser inferior a 45")
    private String surname;

    @NotNull(message = "Por favor, forneça uma data de nascimento")
    @Temporal(DATE)
    private LocalDate birthdate;

    @NotNull(message = "Por favor, especifique o seu sexo")
    @Enumerated(EnumType.STRING)
    private Sex sex;

    @Enumerated(EnumType.STRING)
    private FocusArea focus;

    @Temporal(TIMESTAMP)
    @Column(updatable = false)
    private LocalDateTime joined;

    @Email(message = "Email inválido")
    @Column(unique = true)
    private String email;

    @NotBlank(message = "A palavra-passe é obrigatória")
    @Size(min = 8, message = "A palavra passe deve conter pelo menos 8 caracteres")
    private String password;

    public String getFullName() {
        return getName() + " " + getSurname();
    }

    @Override
    public Collection<? extends GrantedAuthority> getAuthorities() {
        return List.of(new SimpleGrantedAuthority("USER"));
    }

    @Override
    public String getUsername() {
        return email;
    }

    @Override
    public final boolean equals(Object o) {
        if (!(o instanceof Student student)) return false;

        return getId().equals(student.getId()) && Objects.equals(getName(), student.getName()) && Objects.equals(getSurname(), student.getSurname()) && Objects.equals(getBirthdate(), student.getBirthdate());
    }

    @Override
    public int hashCode() {
        int result = getId().hashCode();
        result = 31 * result + Objects.hashCode(getName());
        result = 31 * result + Objects.hashCode(getSurname());
        result = 31 * result + Objects.hashCode(getBirthdate());
        return result;
    }

    @Override
    public int compareTo(Student o) {
        return name.compareTo(o.name);
    }

    @PrePersist
    public void prePersist() {
        joined = LocalDateTime.now();
    }
}
